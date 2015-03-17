package web;

import java.sql.*;

public class Preisanfrage {

	private Connection cn = null;
	private Statement statement = null;
	private PreparedStatement preparedStatement = null;
	private ResultSet resultSet = null;

	private String host = "localhost:3306";
	private String db = "webprojekt";
	private String user = "root";
	private String pw = "";

	public void datenSpeichern(String stil, String qm, String stoecke, String keller, String pool, String email) throws ClassNotFoundException {

		try {
			Class.forName("com.mysql.jdbc.Driver");
			cn = DriverManager.getConnection("jdbc:mysql://" + host + "/" + db
					+ "?user=" + user + "&password=" + pw);

			String query = "INSERT INTO `angebote` (`angebotsnummer`, `stil`, `qm`, `stockwerke`, `keller`, `pool`, `email`) "
					+ "VALUES (NULL, '"+stil+"','"+qm+"','"+stoecke+"','"+keller+"','"+pool+"','"+email+"');";

			preparedStatement = cn.prepareStatement(query);
			preparedStatement.executeUpdate();
			
			System.out.println("Daten erfolgreich in die Datenbank geschrieben.");

		} catch (SQLException ex) {
			// TODO Auto-generated catch block
			System.out.println("SQLException: " + ex.getMessage());
			System.out.println("SQLState: " + ex.getSQLState());
			System.out.println("VendorError: " + ex.getErrorCode());

		} finally {
			close();
		}

	}

	// You need to close the resultSet
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
