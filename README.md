
# btipay
Librarie pentru integrarea sistemului de plati BT IPay al Bancii Transilvania


# Installation

<code>composer require stev/btipay</code>

# Examples
## Send new order

    currentDate = new \DateTime();  
    $order = new Order();  
    $order->setOrderNumber(uniqid('F', false).'/'.$currentDate->format('d-m-Y'))  
     ->setDescription('Plata Fact F')  
     ->setEmail('customer@gmail.com')  
     ->setAmount(1000)  
     ->setCurrencyAlpha3('RON')  
     ->setReturnUrl("https://ecclients.btrl.ro:5443/payment/merchants/Test_BT/finish.html");  
      
    $order->force3DSecure(true);  
      
    $customerDetails = new CustomerDetails();  
    $customerDetails->setEmail('contact.webservice@gmail.com')  
     ->setPhone(40743333333)  
     ->setContact('Stefan');  
      
    $billingInfo = new BillingInfo();  
    $billingInfo->setCountryAlpha2('RO')  
     ->setCity('Iasi')  
     ->setPostAddress('Elena Doamna 20-22');  
    $customerDetails->setBillingInfo($billingInfo);  
      
    $orderBundle = new OrderBundle($currentDate, $customerDetails);  
      
    $order->setOrderBundle($orderBundle);  
      
    $btClient = new BTIPayClient('username', 'password', true);  
      
    try {  
      $response = $btClient->register($order);  
    } catch (\Stev\BTIPay\Exceptions\ValidationException $exception) {  
     print_r( [  'property' => $exception->getProperty(),  
      'value' => $exception->getValue(),  
      'message' => $exception->getMessage(),  
      ]  
     );  
    
    if($response->getErrorCode() === ErrorCodes::SUCCESS){
	      //Redirect your user to the received form url
	     return $response->getFormUrl();
     }

     die($response->getErrorMessage());

     }

## Get Order Status Extended

    $btClient = new BTIPayClient('username', 'password', true);  
      
    //Send an order and finish the payment, then copy the orderId here  
    $orderId = '5ba7984b-9ad0-4ec1-a3b0-5a516d207018';  
      
    try {  
      $response = $btClient->getOrderStatusExtendedByOrderId($orderId);  
    } catch (\Stev\BTIPay\Exceptions\ValidationException $exception) {  
	     print_r( [  'property' => $exception->getProperty(),  
	      'value' => $exception->getValue(),  
	      'message' => $exception->getMessage(),  
	      ]  
	     );  
     
	     return;
         }
         
    if($response->getErrorCode() === ErrorCodes::SUCCESS){
    	      //Show your user the details of the transaction
    	     return $response;
     }

     die($response->getErrorMessage());
     
# BT Documentation
https://btepos.ro/documentatie
