package web.servlet;

import javax.servlet.http.HttpServletRequest;



public class BesucherCounter {
	
	protected final HttpServletRequest request;

	public BesucherCounter(HttpServletRequest request) {
		this.request = request;
		
		 String ipAddress = request.getHeader("X-FORWARDED-FOR");  
		   if (ipAddress == null) {  
			   ipAddress = request.getRemoteAddr();  
		   }
		   System.out.println(ipAddress);
	}
	
	public static void main(String[] args) 
	{
	
//		new BesucherCounter();
	}
}
