<?php
/**
 * Description of HomeController
 *
 * @author manoj
 */
class SignupController extends UIController
{
    private function __construct() {
        
    }
    
    public static function getController() 
    {
        if(!isset(self::$controller))
            self::$controller = new SignupController();
        return self::$controller;
    }
    
    public function handleRequest($app) 
    {
       try
        {
        
            // Authenticate as system user
            $request = Request::get();
            //$request->authenticate(TRUE);
          
            // Authorization not required
            $userFO = new UserFO();
            $userFO->setEmail($app->request()->post('email'));
            $userFO->setPassword($app->request()->post('password'));
            $userFO->setFirstName($app->request()->post('firstName'));
            $userFO->setLastName($app->request()->post('lastName'));
            $userFO->setGender($app->request()->post('gender'));
            $userFO->setDateOfBirth(strtotime($app->request()->post('dateOfBirth')));
            $userFO->setLatitude($app->request()->post('latitude'));
            $userFO->setLongitude($app->request()->post('longitude'));
            
            $requestPayload = new RequestPayload();
            $requestPayload->setFormName('UserFO');
            $requestPayload->setFormObject($userFO);
            
            $request->setPayload($requestPayload);
            
            $userService = UserService::getService();
            $userDTO = $userService->addUser($request);
            $jsonVal = json_encode($userDTO);                 
            
            ServiceUtil::constructSuccessResponseHeader($app, null, null);
            $app->response()->body($jsonVal);            
        }
        catch(Exception $e)
        {
            ServiceUtil::createExceptionResponse($e, $app);
        }
        
    } 


    /*
     *
     *
     */

     private function _sendToMail( $userFO = NULL, $app ) {

         try {
       
             $to = $userFO->getEmail();
             $from = 'admin@cricfi.com';
             $subject = "Cricfi Registration Successfull Email";
             $message = "
                        <html>
                                <head>
                                         <title>Cricfi Registration Successfull Email</title>
                                </head>
                                <body>
                                        <p>This email contains HTML Tags!</p>
                                        <table>
                                        <tr>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        </tr>
                                        <tr>
                                        <td>John</td>
                                        <td>Doe</td>
                                        </tr>
                                </table>
                                </body>
                        </html>
                ";

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

                // More headers

                $headers .= 'From: Admin<admin@cricfi.com>' . "\r\n";


                if( mail($to,$subject,$message,$headers) ) {

                        return true;

                } else {


                        return false;  


                }     
                      
        
        }
        
        catch( Exception $e ) {
                
               ServiceUtil::createExceptionResponse($e, $app);      
        
        }
     

    }
      
 }

?>
