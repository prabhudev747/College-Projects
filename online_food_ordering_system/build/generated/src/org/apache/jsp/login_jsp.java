package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class login_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html;charset=UTF-8");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("<!DOCTYPE html>\n");
      out.write("<html lang=\"en\">\n");
      out.write("<head>\n");
      out.write("<meta charset=\"utf-8\">\n");
      out.write("  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n");
      out.write("  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\">\n");
      out.write("  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>\n");
      out.write("  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>\n");
      out.write("</head>\n");
      out.write("<body>\n");
      out.write("<form class=\"form-horizontal\"  action=\"login_check.jsp\">\n");
      out.write("<fieldset>\n");
      out.write("\n");
      out.write("\n");
      out.write("<!-- Form Name -->\n");
      out.write("<legend>Login</legend>\n");
      out.write("\n");
      out.write("<!-- Text input-->\n");
      out.write("<div class=\"form-group\">\n");
      out.write("  <label class=\"col-md-4 control-label\" for=\"textinput\">User Name</label>  \n");
      out.write("  <div class=\"col-md-2\">\n");
      out.write("  <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Enter Email Id\" class=\"form-control input-md\" required=\"\">\n");
      out.write("  <span class=\"help-block\">Type your Email-ID</span>  \n");
      out.write("  </div>\n");
      out.write("</div>\n");
      out.write("\n");
      out.write("<!-- Password input-->\n");
      out.write("<div class=\"form-group\">\n");
      out.write("  <label class=\"col-md-4 control-label\" for=\"Password\">Password</label>\n");
      out.write("  <div class=\"col-md-2\">\n");
      out.write("    <input id=\"Password\" name=\"Password\" type=\"password\" placeholder=\"Password\" class=\"form-control input-md\" required=\"\">\n");
      out.write("    <span class=\"help-block\">Enter your Password</span>\n");
      out.write("  </div>\n");
      out.write("</div>\n");
      out.write("\n");
      out.write("<!-- Button (Double) -->\n");
      out.write("<div class=\"form-group\">\n");
      out.write("  <label class=\"col-md-4 control-label\" for=\"login\"></label>\n");
      out.write("  <div class=\"col-md-8\">\n");
      out.write("    <button id=\"login\" name=\"login\" class=\"btn btn-primary\">Login</button>\n");
      out.write("    <button id=\"Clear\" name=\"Clear\" type=\"reset\" class=\"btn btn-warning\">Clear</button>\n");
      out.write("  </div>\n");
      out.write("</div>\n");
      out.write("\n");
      out.write("</fieldset>\n");
      out.write("</form>\n");
      out.write("\n");
      out.write("</body>\n");
      out.write("</html>");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
