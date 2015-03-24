package web.servlet;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import web.servlet.helper.BesucherUtil;

/**
 * Servlet implementation class BucherZähler
 */
@WebServlet({ "/Besucher", "/counter" })
public class Besucher extends HttpServlet {
	private static final long serialVersionUID = 1L;
	
	private HttpServletRequest request = null;
	private HttpServletResponse response = null;
	private int count = 0;
	BesucherUtil util;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Besucher() {
        super();
        util = new BesucherUtil();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see Servlet#init(ServletConfig)
	 */
	public void init(ServletConfig config) throws ServletException 
	{
		
	}


	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		
		this.request = request;
		this.response = response;
		
		String page = request.getParameter("page");
		String ip = request.getRemoteAddr();
		
		
		// Nur Hochzählen bei Starseitenbesuch
		if (page.equals("start")) {
			try {
				util.insertUser(ip);
				count = util.selectUserSum();
			} catch (ClassNotFoundException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			
		}
		
		String json = "{\"besucher\": \""+count+"\", \"ip\": \""+ip+"\"}";
		
		//JSON als Rückgabeformat
		response.setContentType("application/json");
		
		PrintWriter out = response.getWriter();
		//Rückgabe der Daten
		out.print(json);
		out.flush();
		
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}


}
