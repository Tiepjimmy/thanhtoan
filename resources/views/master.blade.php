
<!DOCTYPE html>
<html lang="en-US">
  <head>
    
<title>Airport fast track service</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Cache-Control" content="must-revalidate">
<meta http-equiv="Expires" content="Wed, 08 Aug 2018 10:09:42 GMT">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#ffffff" />
<meta name="mobile-web-app-capable" content="yes">
<meta name="description" content="We call this service is Fast Track: To avoid wasting your valuable time, especially after having a long flight or other personal reasons." />
<meta name="keywords" content="" />
<meta name="news_keywords" content="" />
<meta name="robots" content="index,follow" />
<meta name="googlebot" content="index,follow" />
<meta name="author" content="Vietnam-Evisa.Org" />
<meta name="google-site-verification" content="NlyS_0SjDi9kUVOtGJ7vFv0gPw9CjRFzXlvM9wDuHwI" />
<meta property="fb:admins" content="594250103967893"/>
<!--Retargeting Facebook-->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
  _fbq.push(['addPixelId', '266298413576905']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>

<link rel="stylesheet" type="text/css" media="screen,all" href="css/botstrap.css?ct=20180808" />
<link rel="stylesheet" type="text/css" media="screen,all" href="css/style.css?ct=20180808" />
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css?ct=20180808">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald&ct=20180808">

<script type="text/javascript" src="js/jquery.min.js?ct=20180808"></script>
<script type="text/javascript" src="js/bootstrap.min.js?ct=20180808"></script>
<script type="text/javascript" src="js/util.js?ct=20180808"></script>

<script type="text/javascript">
  var BASE_URL = "https://www.vietnam-evisa.org";
</script>
  </head>
  <body>
  <script type="text/javascript" src="js/service.js"></script>
<div class="service-form clearfix">
  <div class="service-title">Needing Extra Service ?</div>
  <p>Please complete the form then we contact to you soon.</p>
  <div class="airport-service-form clearfix">
    <form name="frmRequestService" class="form-horizontal" role="form" action="https://www.vietnam-evisa.org/booking/airport_service.html" method="POST">
      <div class="service-options clearfix">
        <div class="step-title">1. What you need?</div>
        <div class="clearfix">
          <div class="col-md-8">
            <div class="clearfix">
              <div class="form-group">
                <div class="col-md-4">
                  <label class="control-label">Airport fast track ?</label>
                </div>
                <div class="col-md-8">
                  <div class="row clearfix">
                    <div class="col-md-4">
                      <input type="radio" id="airport-fast-track-vip" name="airport-fast-track" value="2" class="airport-fast-track"> <label for="airport-fast-track-vip">VIP</label>
                    </div>
                    <div class="col-md-4">
                      <input type="radio" id="airport-fast-track-normal" name="airport-fast-track" value="1" class="airport-fast-track"> <label for="airport-fast-track-normal">Normal</label>
                    </div>
                    <div class="col-md-4">
                      <input type="radio" id="airport-fast-track-no" name="airport-fast-track" value="0" class="airport-fast-track" checked="checked"> <label for="airport-fast-track-no">No</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-4">
                  <label class="control-label">Car pick-up ?</label>
                </div>
                <div class="col-md-8">
                  <div class="row clearfix">
                    <div class="col-md-4">
                      <input type="radio" id="car-pickup-yes" name="car-pickup" value="1" class="car-pickup"> <label for="car-pickup-yes">Yes</label>
                    </div>
                    <div class="col-md-4">
                      <input type="radio" id="car-pickup-no" name="car-pickup" value="0" class="car-pickup" checked="checked"> <label for="car-pickup-no">No</label>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="car-select" id="car-select" style="display: none; margin-top: 5px;">
                      <div class="col-md-6">
                        <select class="form-control car-type" name="car-type" id="car-type">
                          <option value="Economic Car" selected="selected">Economic Car</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <select class="form-control num-seat" name="num-seat" id="num-seat">
                          <option value="4" selected="selected">4 seats</option>
                          <option value="7">7 seats</option>
                          <option value="16">16 seats</option>
                          <option value="24">24 seats</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-4">
                  <label class="control-label">Arrival port / airport</label>
                </div>
                <div class="col-md-8">
                  <select id="arrival-port" name="arrival-port" class="form-control arrival-port">
                                        <option value="1">Tan Son Nhat International Airport (Ho Chi Minh City)</option>
                                        <option value="2">Noi Bai International Airport (Ha Noi)</option>
                                        <option value="3">Da Nang International Airport</option>
                                        <option value="4">Cam Ranh International Airport (Khanh Hoa)</option>
                                      </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-4">
                  <label class="control-label">Number of person</label>
                </div>
                <div class="col-md-8">
                  <select id="group-size" name="group-size" class="form-control group-size">
                                        <option value="1">1 person</option>
                                        <option value="2">2 persons</option>
                                        <option value="3">3 persons</option>
                                        <option value="4">4 persons</option>
                                        <option value="5">5 persons</option>
                                        <option value="6">6 persons</option>
                                        <option value="7">7 persons</option>
                                        <option value="8">8 persons</option>
                                        <option value="9">9 persons</option>
                                        <option value="10">10 persons</option>
                                        <option value="11">11 persons</option>
                                        <option value="12">12 persons</option>
                                        <option value="13">13 persons</option>
                                        <option value="14">14 persons</option>
                                        <option value="15">15 persons</option>
                                      </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel-fees">
              <ul>
                <li class="clearfix">
                  <label>Number of person:</label>
                  <span class="group-size-t">...</span>
                </li>
                <li class="clearfix">
                  <label>Arrival port:</label>
                  <span class="arrival-port-t">...</span>
                </li>
                <li class="clearfix">
                  <label>Airport fast track:</label>
                  <span class="airport-fast-track-t price">0 USD</span>
                </li>
                <li class="clearfix car-pickup-li">
                  <label>Car pick-up:</label>
                  <span class="car-pickup-t price">0 USD</span>
                </li>
                <li class="clearfix total">
                  <label>TOTAL FEE:</label>
                  <span class="total_price">0 USD</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="div"></div>
      <div class="contact-information clearfix">
        <div class="step-title">2. Who we can pickup at the airport?</div>
        <div class="clearfix">
          <div class="col-md-8">
            <div class="clearfix">
              <div class="form-group">
                <div class="clearfix">
                  <div class="col-md-4">
                    <label class="control-label">Welcome name <span class="required">*</span></label>
                  </div>
                  <div class="col-md-8">
                    <div class="row clearfix">
                      <div class="col-md-4">
                        <select id="name-prefix" name="name-prefix" class="form-control name-prefix">
                          <option value="Mr.">Mr.</option>
                          <option value="Mrs.">Mrs.</option>
                          <option value="Mss.">Mss.</option>
                        </select>
                      </div>
                      <div class="col-md-8">
                        <input type="text" id="welcome-name" name="welcome-name" class="form-control welcome-name" value="" placeholder="John Smith">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-4">
                  <label class="control-label">Arrival date and time <span class="required">*</span></label>
                </div>
                <div class="col-md-8">
                  <input type="text" id="arrival-date" name="arrival-date" class="form-control arrival-date" value="" placeholder="mm/dd/yyyy 10:30AM">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-4">
                  <label class="control-label">Flight number <span class="required">*</span></label>
                </div>
                <div class="col-md-8">
                  <input type="text" id="flight-number" name="flight-number" class="form-control flight-number" value="" placeholder="VN123">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="welcome-board">
              <div class="welcome">Welcome to Vietnam</div>
              <div class="welcome-name-t"></div>
              <div>Flight No: <span class="flight-number-t"></span></div>
              <div>Arrival time: <span class="arrival-time-t"></span> (GMT +7)</div>
            </div>
          </div>
        </div>
      </div>
      <div class="div"></div>
      <div class="contact-information">
        <div class="step-title">3. Who we can contact via Email?</div>
        <div class="clearfix">
          <div class="col-md-8">
            <div class="clearfix">
              <div class="form-group">
                <div class="clearfix">
                  <div class="col-md-4">
                    <label class="control-label">Your fullname <span class="required">*</span></label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="fullname" name="fullname" class="form-control fullname" value="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="clearfix">
                  <div class="col-md-4">
                    <label class="control-label">Email <span class="required">*</span></label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="email" name="email" class="form-control email" value="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="clearfix">
                  <div class="col-md-4">
                    <label class="control-label">Phone number</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="phone-number" name="phone-number" class="form-control phone-number" value="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="clearfix">
                  <div class="col-md-4">
                    <label class="control-label">Comment</label>
                  </div>
                  <div class="col-md-8">
                    <textarea type="text" id="special-request" name="special-request" class="form-control special-request" value="" rows="5"></textarea>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="clearfix">
                  <div class="col-md-4">
                    <label class="control-label">Captcha <span class="required">*</span></label>
                  </div>
                  <div class="col-md-8">
                    <div class="left">
                      <input type="text" style="width: 100px" value="" id="security_code" name="security_code" required="" class="form-control">
                    </div>
                    <div class="left" style="margin-left: 10px; line-height: 30px;">
                      <label class="security-code">E45068</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
          </div>
        </div>
      </div>
      <div class="div"></div>
      <div class="payment-method">
        <div class="step-title">4. Your payment method</div>
        <div class="form-group">
          <div class="clearfix">
            <div class="col-md-12">
              <label class="hidden">Select one of below payment method to proceed the payment:</label>
              <table width="100%" style="margin-top: 20px">
                <tr>
                                    <td class="center">
                    <div class="radio">
                      <label>
                        <img class="img-responsive" src="/template/images/payment/paypal.png" alt="Paypal" /><br>
                        <input type="radio" name="payment" value="Paypal" checked="checked" />Credit Card by Paypal
                      </label>
                    </div>
                  </td>
                                                    </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-button">
        <button type="submit" class="btn btn-danger btnstep">SUBMIT</button>
      </div>
    </form>
  </div>
</div>    
    </div>
        <div class="clearfix" style="margin-top:20px; margin-bottom:20px;">
          <div style='float: right'>
  <b:if cond='data:post.isFirstPost'>
  <script>(function(d){
      var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
      js = d.createElement('script'); js.id = id; js.async = true;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      d.getElementsByTagName('head')[0].appendChild(js);
    }(document));</script>
  </b:if>
  <fb:like expr:href="data:post.canonicalUrl" layout='button_count'
    send='true' show_faces='false' font="arial" action="like"
    colorscheme="light"></fb:like>
</div>          
<script type="text/javascript" src="//apis.google.com/js/plusone.js">
    {lang: 'en-US'}
</script>
  </body>
</html>




<h3 style="text-align: center;"><span style="color: #da0000;"><strong>Meet and Assist at the Hong Lam Giang</strong></span></h3>
<p><strong style="color: #da0000;">1. ARRIVAL SERVICES</strong></p>
<p>This service helps the visitors to getting visa stamping, visa sticker and porter service at Vietnam Airpot. It's&nbsp;established to assist visitors at the airport when arrived with the highest satisfy&nbsp;to avoid wasting visitor's valuable time, especially after having a long flight or other personal reasons.</p>
<p style="margin-left: 30px;"><span style="color: #da0000;"><strong>1.1 Two options for choosing:</strong></span></p>
<p style="margin-left: 60px;"><span style="color: #da0000;"><strong>A. Fast track :</strong></span> Our staff will meet you at the Landing Visa Counter with your name on the welcome board and assist you to get visa stamp and visa sticker without getting line as other. <strong>Just 5-10 minutes</strong> you will at the luggage lounge to wait for your belonging.</p>
<p style="margin-left: 60px;"><span style="color: #da0000;"><strong>B.&nbsp;VIP Fast track :</strong></span> Our staff will meet you at the Landing Visa Counter with your name on the welcome board and assist you to get visa stamp and visa sticker without getting line as other. After that our staff will <strong>escort you go to luggage lounge to assist you take care your luggage&nbsp; as baggage porters</strong>.<img src="https://secure.adnxs.com/seg?add=1814643&amp;t=2" alt="" width="1" height="1" /></p>
<p style="margin-left: 30px;"><span style="color: #da0000;"><strong>1.2 Who is recommended to use this service:</strong></span></p>

<p style="margin-left: 60px;">Businessmen</p>
<p style="margin-left: 60px;">Elderly and Infants</p>
<p style="margin-left: 60px;">Pregnant Women</p>
<p style="margin-left: 60px;">Transit but closing time too tight</p>
<p style="margin-left: 60px;">In Group of travel</p>
<p style="margin-left: 60px;">Others but not here, please <a href="../../contact.html"><span style="text-decoration: underline;">contact</span></a></p>

<p style="margin-left: 30px;"><span style="color: #da0000;"><strong>1.3 Some Advantages when use Fast Track service (Your Arrival experience will be included):</strong></span></p>
 
<p style="margin-left: 60px;">Services implemented quickly, do not need to wait for and get line.</p>
<p style="margin-left: 60px;">Being met from the aircraft gate</p>
<p style="margin-left: 60px;">Get visa stamp at landing visa counter without get line</p>
<p style="margin-left: 60px;">Be assisted and escorted through &ldquo;fast track&rdquo; immigration.</p>
<p style="margin-left: 60px;">Baggage porters available on request</p>
<p style="margin-left: 60px;">Executive car (if booked) will be parked up outside the arrivals terminal to ensure minimum well time.</p>
<p style="margin-left: 60px;">Please note that you can personalize and tailor make this service to your requirements.</p>
<p><strong style="color: #da0000;">2. DEPARTURE SERVICES</strong></p>
<p>Clients of&nbsp;Vietnam-Evisa.Org &nbsp;are assisted through the airport and with all aspects of their departure service, from the moment you arrive at the airport until your flight is airborne.&nbsp; From the moment you arrive at the airport your personal airport agent will be waiting kerbside to assist you.</p>
<p>Your Departure experience will include:</p>

<p style="margin-left: 60px;">&nbsp;Kerbside meet and assist directly outside the terminal</p>
<p style="margin-left: 60px;">&nbsp;Baggage Porters (if booked) to collect bags and transfer to check-in.</p>
<p style="margin-left: 60px;">&nbsp;Pre-check in service (subject to airline) with preferred seats arranged</p>
<p style="margin-left: 60px;">&nbsp;Expedited though all check-in and security processes.</p>
<p style="margin-left: 60px;">&nbsp;Escort to lounge and to the aircraft gate when you are ready to board.</p>

<p><span style="color: #da0000;"><strong>3. BAGGAGE PORTERS</strong></span></p>
<p>Whether you are traveling with one bag or ten, let our porters take the burden of carrying your suitcases off you. By far the easiest way of getting your luggage either to check-in or from baggage reclaim to your vehicle, this bespoke service can be booked online using the Our Airport Concierge.</p>
<p><strong style="color: #da0000;">4. HOW TO BOOK?<br /></strong></p>
<p style="margin-left: 30px;"><span style="color: #da0000;"><strong>Step 1</strong>:</span> Choosing Airport Fast Track Service while you apply Vietnam visa on arrival or you can fill the form requirements below with the correct personal information such as your full name, passport number, Date of Birth, nationality, flight number, departure and arrival time (GMT+7), or sending your request&nbsp;via email with the mentioned information. If you have any changes, please announce us 48h before your departure in your country. We work 24hours a day and 7 days a week.</p>
<p style="margin-left: 30px;"><span style="color: #da0000;"><strong>Step 2</strong>:</span> Our staff is waiting for you at the aircraft gate to pick you up with your name on welcome board. If you don&rsquo;t see our staff, please call us immediately in the hotline <strong><span style="color: #da0000;">(+84) 909 343 525&nbsp;</span></strong>for any help.</p>
<p style="margin-left: 30px;"><span style="color: #da0000;"><strong>Step 3</strong>:</span> Giving our Representative your required document including visa approval letter, entry and exit form, passport, 2 photos and <a href="../../visa-fee.html"><span style="text-decoration: underline;">stamping fee</span></a> in cash in order to help you complete entry procedure.&nbsp;</p>
<p style="margin-left: 30px;"><span style="color: #da0000;"><strong>Step 4</strong>:</span> Our staff will escort you to baggage lounge as porter if you require. Or passing the custom check in and up outside car parking if you have car pick up.</p>
<p style="text-align: justify;"><span style="color: #da0000;"><strong>Refund policy is within 48 working hours</strong>:</span> Please <strong>notify us your flight details 48 working hours for our staffs before your departure</strong> in order to serve you better. The refund will not be done if we don&rsquo;t receive your confirmation.&nbsp;</p>
<p style="text-align: justify;"></p>




          
<script type="text/javascript" src="js/service.js"></script>
<div class="service-form clearfix">
  <div class="service-title">Needing Extra Service ?</div>
  <p>Please complete the form then we contact to you soon.</p>
  <div class="airport-service-form clearfix">
    <form name="frmRequestService" class="form-horizontal" role="form" action="https://www.vietnam-evisa.org/booking/airport_service.html" method="POST">
      <div class="service-options clearfix">
        <div class="step-title">1. What you need?</div>
        <div class="clearfix">
          <div class="col-md-8">
            <div class="clearfix">
              <div class="form-group">
                <div class="col-md-4">
                  <label class="control-label">Airport fast track ?</label>
                </div>
                <div class="col-md-8">
                  <div class="row clearfix">
                    <div class="col-md-4">
                      <input type="radio" id="airport-fast-track-vip" name="airport-fast-track" value="2" class="airport-fast-track"> <label for="airport-fast-track-vip">VIP</label>
                    </div>
                    <div class="col-md-4">
                      <input type="radio" id="airport-fast-track-normal" name="airport-fast-track" value="1" class="airport-fast-track"> <label for="airport-fast-track-normal">Normal</label>
                    </div>
                    <div class="col-md-4">
                      <input type="radio" id="airport-fast-track-no" name="airport-fast-track" value="0" class="airport-fast-track" checked="checked"> <label for="airport-fast-track-no">No</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-4">
                  <label class="control-label">Car pick-up ?</label>
                </div>
                <div class="col-md-8">
                  <div class="row clearfix">
                    <div class="col-md-4">
                      <input type="radio" id="car-pickup-yes" name="car-pickup" value="1" class="car-pickup"> <label for="car-pickup-yes">Yes</label>
                    </div>
                    <div class="col-md-4">
                      <input type="radio" id="car-pickup-no" name="car-pickup" value="0" class="car-pickup" checked="checked"> <label for="car-pickup-no">No</label>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="car-select" id="car-select" style="display: none; margin-top: 5px;">
                      <div class="col-md-6">
                        <select class="form-control car-type" name="car-type" id="car-type">
                          <option value="Economic Car" selected="selected">Economic Car</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <select class="form-control num-seat" name="num-seat" id="num-seat">
                          <option value="4" selected="selected">4 seats</option>
                          <option value="7">7 seats</option>
                          <option value="16">16 seats</option>
                          <option value="24">24 seats</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-4">
                  <label class="control-label">Arrival port / airport</label>
                </div>
                <div class="col-md-8">
                  <select id="arrival-port" name="arrival-port" class="form-control arrival-port">
                                        <option value="1">Tan Son Nhat International Airport (Ho Chi Minh City)</option>
                                        <option value="2">Noi Bai International Airport (Ha Noi)</option>
                                        <option value="3">Da Nang International Airport</option>
                                        <option value="4">Cam Ranh International Airport (Khanh Hoa)</option>
                                      </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-4">
                  <label class="control-label">Number of person</label>
                </div>
                <div class="col-md-8">
                  <select id="group-size" name="group-size" class="form-control group-size">
                                        <option value="1">1 person</option>
                                        <option value="2">2 persons</option>
                                        <option value="3">3 persons</option>
                                        <option value="4">4 persons</option>
                                        <option value="5">5 persons</option>
                                        <option value="6">6 persons</option>
                                        <option value="7">7 persons</option>
                                        <option value="8">8 persons</option>
                                        <option value="9">9 persons</option>
                                        <option value="10">10 persons</option>
                                        <option value="11">11 persons</option>
                                        <option value="12">12 persons</option>
                                        <option value="13">13 persons</option>
                                        <option value="14">14 persons</option>
                                        <option value="15">15 persons</option>
                                      </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel-fees">
              <ul>
                <li class="clearfix">
                  <label>Number of person:</label>
                  <span class="group-size-t">...</span>
                </li>
                <li class="clearfix">
                  <label>Arrival port:</label>
                  <span class="arrival-port-t">...</span>
                </li>
                <li class="clearfix">
                  <label>Airport fast track:</label>
                  <span class="airport-fast-track-t price">0 USD</span>
                </li>
                <li class="clearfix car-pickup-li">
                  <label>Car pick-up:</label>
                  <span class="car-pickup-t price">0 USD</span>
                </li>
                <li class="clearfix total">
                  <label>TOTAL FEE:</label>
                  <span class="total_price">0 USD</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="div"></div>
      <div class="contact-information clearfix">
        <div class="step-title">2. Who we can pickup at the airport?</div>
        <div class="clearfix">
          <div class="col-md-8">
            <div class="clearfix">
              <div class="form-group">
                <div class="clearfix">
                  <div class="col-md-4">
                    <label class="control-label">Welcome name <span class="required">*</span></label>
                  </div>
                  <div class="col-md-8">
                    <div class="row clearfix">
                      <div class="col-md-4">
                        <select id="name-prefix" name="name-prefix" class="form-control name-prefix">
                          <option value="Mr.">Mr.</option>
                          <option value="Mrs.">Mrs.</option>
                          <option value="Mss.">Mss.</option>
                        </select>
                      </div>
                      <div class="col-md-8">
                        <input type="text" id="welcome-name" name="welcome-name" class="form-control welcome-name" value="" placeholder="John Smith">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-4">
                  <label class="control-label">Arrival date and time <span class="required">*</span></label>
                </div>
                <div class="col-md-8">
                  <input type="text" id="arrival-date" name="arrival-date" class="form-control arrival-date" value="" placeholder="mm/dd/yyyy 10:30AM">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-4">
                  <label class="control-label">Flight number <span class="required">*</span></label>
                </div>
                <div class="col-md-8">
                  <input type="text" id="flight-number" name="flight-number" class="form-control flight-number" value="" placeholder="VN123">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="welcome-board">
              <div class="welcome">Welcome to Vietnam</div>
              <div class="welcome-name-t"></div>
              <div>Flight No: <span class="flight-number-t"></span></div>
              <div>Arrival time: <span class="arrival-time-t"></span> (GMT +7)</div>
            </div>
          </div>
        </div>
      </div>
      <div class="div"></div>
      <div class="contact-information">
        <div class="step-title">3. Who we can contact via Email?</div>
        <div class="clearfix">
          <div class="col-md-8">
            <div class="clearfix">
              <div class="form-group">
                <div class="clearfix">
                  <div class="col-md-4">
                    <label class="control-label">Your fullname <span class="required">*</span></label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="fullname" name="fullname" class="form-control fullname" value="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="clearfix">
                  <div class="col-md-4">
                    <label class="control-label">Email <span class="required">*</span></label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="email" name="email" class="form-control email" value="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="clearfix">
                  <div class="col-md-4">
                    <label class="control-label">Phone number</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" id="phone-number" name="phone-number" class="form-control phone-number" value="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="clearfix">
                  <div class="col-md-4">
                    <label class="control-label">Comment</label>
                  </div>
                  <div class="col-md-8">
                    <textarea type="text" id="special-request" name="special-request" class="form-control special-request" value="" rows="5"></textarea>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="clearfix">
                  <div class="col-md-4">
                    <label class="control-label">Captcha <span class="required">*</span></label>
                  </div>
                  <div class="col-md-8">
                    <div class="left">
                      <input type="text" style="width: 100px" value="" id="security_code" name="security_code" required="" class="form-control">
                    </div>
                    <div class="left" style="margin-left: 10px; line-height: 30px;">
                      <label class="security-code">E45068</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
          </div>
        </div>
      </div>
      <div class="div"></div>
      <div class="payment-method">
        <div class="step-title">4. Your payment method</div>
        <div class="form-group">
          <div class="clearfix">
            <div class="col-md-12">
              <label class="hidden">Select one of below payment method to proceed the payment:</label>
              <table width="100%" style="margin-top: 20px">
                <tr>
                                    <td class="center">
                    <div class="radio">
                      <label>
                        <img class="img-responsive" src="images/a2_3.png" alt="Paypal" /><br>
                        <input type="radio" name="payment" value="Paypal" checked="checked" />Credit Card by Paypal
                      </label>
                    </div>
                  </td>
                                                    </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-button">
        <button type="submit" class="btn btn-danger btnstep">SUBMIT</button>
      </div>
    </form>
  </div>
</div> 
          


    </div>
        <div class="clearfix" style="margin-top:20px; margin-bottom:20px;">
          <div style='float: right'>
  <b:if cond='data:post.isFirstPost'>
  <script>(function(d){
      var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
      js = d.createElement('script'); js.id = id; js.async = true;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      d.getElementsByTagName('head')[0].appendChild(js);
    }(document));</script>
  </b:if>
  <fb:like expr:href="data:post.canonicalUrl" layout='button_count'
    send='true' show_faces='false' font="arial" action="like"
    colorscheme="light"></fb:like>
</div>          
<script type="text/javascript" src="//apis.google.com/js/plusone.js">
    {lang: 'en-US'}
</script>
