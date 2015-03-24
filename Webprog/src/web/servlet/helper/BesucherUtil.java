package web.servlet.helper;

import java.sql.*;

public class BesucherUtil {

	private Connection cn = null;
	private Statement statement = null;
	private PreparedStatement preparedStatement = null;
	private ResultSet resultSet = null;

	private String host = "localhost:3306";
	private String db = "webprojekt";
	private String user = "root";
	private String pw = "";

	public void insertUser(String ip) throws ClassNotFoundException {

		try {
			Class.forName("com.mysql.jdbc.Driver");
			cn = DriverManager.getConnection("jdbc:mysql://" + host + "/" + db
					+ "?user=" + user + "&password=" + pw);

			String query = "INSERT INTO `besucher` (`besucher`, `ip`) "
					+ "VALUES (NULL, '"+ip+"');";

			preparedStatement = cn.prepareStatement(query);
			preparedStatement.executeUpdate();
			
			System.out.println("Daten erfolgreich in die Datenbank geschrieben.");

		} catch (SQLException ex) {
			System.out.println("SQLException: " + ex.getMessage());
			System.out.println("SQLState: " + ex.getSQLState());
			System.out.println("VendorError: " + ex.getErrorCode());

		} finally {
			close();
		}
	}
	
	public int selectUserSum() throws ClassNotFoundException
	{
		int besucher = 0;
		try {
			Class.forName("com.mysql.jdbc.Driver");
			cn = DriverManager.getConnection("jdbc:mysql://" + host + "/" + db
					+ "?user=" + user + "&password=" + pw);

			String query = "Select Count(besucher) AS \'ANZ\' FROM besucher;";

			statement = cn.createStatement();
			resultSet = statement.executeQuery(query);
			
			while (resultSet.next()) {
				besucher= resultSet.getInt("ANZ");
				
			}
			
			System.out.println("Daten erfolgreich in die Datenbank geschrieben.");

		} catch (SQLException ex) {
			System.out.println("SQLException: " + ex.getMessage());
			System.out.println("SQLState: " + ex.getSQLState());
			System.out.println("VendorError: " + ex.getErrorCode());

		} finally {
			close();
		}
		
		return besucher;
	}

	// Schlieﬂen der Verbindung
	private void close() {
		try {
			if (resultSet != null) {
				resultSet.close();
			}

			if (statement != null) {
				statement.close();
			}

			if (cn != null) {
				cn.close();
			}
		} catch (Exception e) {

		}
	}

}
