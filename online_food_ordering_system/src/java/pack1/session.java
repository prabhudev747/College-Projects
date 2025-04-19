/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pack1;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;

/**
 *
 * @author HP
 */
public class session {
    
    public boolean logged_in(HttpSession session,HttpServletRequest request)
    {
         String uid=(String)session.getAttribute("uid");
         if(uid==null)
         {
             return false;
         }
         else{
             return true;
         }
         
    }
}
