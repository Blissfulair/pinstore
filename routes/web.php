<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/cron-price', 'FrontendController@cronPrice');

//Develope API Access
Route::get('/developer-api-V1/airtime/{api}/{number}/{network}/{amount}', 'DeveloperController@developerapiairtimes')->name('developerapi_airtimes');
Route::get('/developer-api-V1/query_airtime/{api}/{trx}', 'DeveloperController@developerapiairtimequery')->name('developerapiquery_airtime');
Route::get('/developer-api-V1/internetdata/{api}/{network}/{bundle}/{number}', 'DeveloperController@developerapiinternetdata')->name('developerapi_internetdata');
Route::get('/developer-api-V1/query_internetdata/{api}/{trx}', 'DeveloperController@developerapidataquery')->name('developerapiquerydata');
Route::get('/developer-api-V1/cabletv_verify/{api}/{decoder}/{number}', 'DeveloperController@developerapicabletv_verify')->name('developerapicabletv_verify');
Route::get('/developer-api-V1/cable_tv_buy/{api}/{decoder}/{plan}/{number}', 'DeveloperController@developerapicable_tv')->name('developerapicable_tv');
Route::get('/developer-api-V1/query_cable_tv_buy/{api}/{trx}', 'DeveloperController@developerapicable_tvquery')->name('developerapiquerycable_tv');
Route::get('/developer-api-V1/electricity_verify/{api}/{company}/{number}', 'DeveloperController@developerapielectricity_verify')->name('developerapielectricity _verify');
Route::get('/developer-api-V1/electricity_buy/{api}/{company}/{type}/{number}/{amount}', 'DeveloperController@developerapielectricity_buy')->name('developerapi_electricity');
Route::get('/developer-api-V1/query_electricity_buy/{api}/{trx}', 'DeveloperController@developerapielectricityquery')->name('developerapiquery_electricity');




Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');

Route::get('/ipnbtc', 'PaymentController@ipnBchain')->name('ipn.bchain');
Route::get('/ipnblockbtc', 'PaymentController@blockIpnBtc')->name('ipn.block.btc');
Route::get('/ipnblocklite', 'PaymentController@blockIpnLite')->name('ipn.block.lite');
Route::get('/ipnblockdog', 'PaymentController@blockIpnDog')->name('ipn.block.dog');
Route::post('/ipnpaypal', 'PaymentController@ipnpaypal')->name('ipn.paypal');
Route::post('/ipnperfect', 'PaymentController@ipnperfect')->name('ipn.perfect');
Route::post('/ipnstripe', 'PaymentController@ipnstripe')->name('ipn.stripe');
Route::post('/ipnskrill', 'PaymentController@skrillIPN')->name('ipn.skrill');
Route::post('/ipncoinpaybtc', 'PaymentController@ipnCoinPayBtc')->name('ipn.coinPay.btc');
Route::post('/ipncoinpayeth', 'PaymentController@ipnCoinPayEth')->name('ipn.coinPay.eth');
Route::post('/ipncoinpaybch', 'PaymentController@ipnCoinPayBch')->name('ipn.coinPay.bch');
Route::post('/ipncoinpaydash', 'PaymentController@ipnCoinPayDash')->name('ipn.coinPay.dash');
Route::post('/ipncoinpaydoge', 'PaymentController@ipnCoinPayDoge')->name('ipn.coinPay.doge');
Route::post('/ipncoinpayltc', 'PaymentController@ipnCoinPayLtc')->name('ipn.coinPay.ltc');
Route::post('/ipncoin', 'PaymentController@ipnCoin')->name('ipn.coinpay');
Route::post('/ipncoingate', 'PaymentController@ipnCoinGate')->name('ipn.coingate');


Route::post('/ipnpaytm', 'PaymentController@ipnPayTm')->name('ipn.paytm');
Route::post('/ipnpayeer', 'PaymentController@ipnPayEer')->name('ipn.payeer');
Route::post('/ipnpaystack', 'PaymentController@ipnPayStack')->name('ipn.paystack');
Route::post('/ipnvoguepay', 'PaymentController@ipnVoguePay')->name('ipn.voguepay');
//Payment IPN



Route::get('/', 'FrontendController@index')->name('main');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/faq', 'FrontendController@faq')->name('faq');
Route::get('/how-it-works', 'FrontendController@how')->name('how');
Route::get('/rates', 'FrontendController@rate')->name('rates');
Route::get('/privacy', 'FrontendController@privacy')->name('privacy');
Route::get('/jobs', 'FrontendController@blog')->name('blog');
Route::get('/blog/{id}', 'FrontendController@blogview')->name('blogview');
Route::get('/maintain', 'FrontendController@maintain')->name('maintain');
Route::post('/contactSubmit', 'FrontendController@contactSubmit')->name('contact.submit');

Route::get('/airtime', 'FrontendController@mobilerecharge')->name('airtime2');
Route::get('/internetdata', 'FrontendController@internetdata')->name('internetdata2');
Route::post('/internetdata2', 'FrontendController@internetdatapost')->name('internetdatafront');
Route::get('/cable', 'FrontendController@cabletv')->name('cable');
Route::post('/cable2', 'FrontendController@cabletv2')->name('cable2');
Route::get('/power', 'FrontendController@electricity')->name('power');
Route::post('/electricitypost2', 'FrontendController@electricitypost2')->name('electricitypost2');



Route::get('/blogs', 'FrontendController@blog')->name('blog');
Route::get('/details/{id}/{slud}', 'FrontendController@details')->name('blog.details');
Route::get('/category/{id}/{slug}', 'FrontendController@categoryByBlog')->name('cats.blog');
Route::get('/about-us', 'FrontendController@about')->name('about');
Route::get('/service/{id}/{slug}', 'FrontendController@service')->name('serve');

Route::get('/faqs', 'FrontendController@faqs')->name('faqs');
Route::get('/terms-condition', 'FrontendController@termsCondition')->name('terms-condition');
Route::get('/privacy-policy', 'FrontendController@privacyPolicy')->name('privacy-policy');
Route::get('/menu/{id}/{slug}', 'FrontendController@menu')->name('menu');
Route::post('/subscribe', 'FrontendController@subscribe')->name('subscribe');
Route::get('/contact-us', 'FrontendController@contactUs')->name('contact-us');
Route::post('/contact-us','FrontendController@contactSubmit')->name('contact-us');

Auth::routes();

Route::group(['middleware' => ['guest']], function () {
    Route::get('/register/{reference}', 'FrontendController@register')->name('refer.register');


});




Route::group(['prefix' => 'user'], function () {
    Route::get('verify', 'HomeController@authCheck')->name('user.authorization');
    Route::post('verification', 'HomeController@sendVcode')->name('user.send-vcode');
    Route::post('smsVerify', 'HomeController@smsVerify')->name('user.sms-verify');
    Route::post('verify-email', 'HomeController@sendEmailVcode')->name('user.send-emailVcode');
    Route::post('postEmailVerify', 'HomeController@postEmailVerify')->name('user.email-verify');
    Route::post('veribank', 'HomeController@veribank')->name('veri.bank');
    Route::get('validate/{id}', 'HomeController@validatebank')->name('bank.vvalidate');

        Route::group(['middleware' => ['auth','CheckStatus']], function() {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/user-faq', 'HomeController@faqs')->name('user.faq');
        Route::get('user/daily/rewards', 'HomeController@daily')->name('userDailyBonus');

        //Giftcards
        Route::get('/exchange-giftcard', 'HomeController@sellgift')->name('sellgift');
        Route::get('/select-gift-card/{id}', 'HomeController@sellgift2')->name('sellgiftcard');

        Route::get('/select-gift-card/{id}', 'HomeController@sellgift2')->name('selectgiftcard');
        Route::post('/exchange-giftcard', 'HomeController@excard')->name('excard');
        Route::get('/giftcard-log', 'HomeController@excardlog')->name('excardlog');


        //DeveloperApi
        Route::post('/developer-api-access', 'MerchantController@developerapiaccess')->name('developerapiaccess');
        Route::get('/developer-api', 'MerchantController@developerapi')->name('developerapi');
        Route::get('/developer-api-airtime', 'MerchantController@developerapiairtime')->name('developerapiairtime');
        Route::get('/developer-api-data', 'MerchantController@developerapidata')->name('developerapidata');
        Route::get('/developer-api-cabletv', 'MerchantController@developerapicabletv')->name('developerapicabletv');
        Route::get('/developer-api-power', 'MerchantController@developerapipower')->name('developerapipower');

        //Billpayment

         Route::get('/convert-airtime', 'MerchantController@convertairtime')->name('convertairtime');
         Route::post('/convert-airtime', 'MerchantController@convertnow')->name('convertairtimepost');
         Route::get('/cable-tv', 'MerchantController@cabletv')->name('cabletv');
         Route::post('/cable-tvpost', 'MerchantController@cabletvpost')->name('cabletvpost');
         Route::get('/cable-tv-sub', 'MerchantController@cabletvpost2')->name('cabletvpost2');
         Route::post('/cable-tv-sub', 'MerchantController@cabletvpost3')->name('cabletvpost3');
         Route::get('/cable-tv-pay', 'MerchantController@cabletvpay')->name('cabletvpay');
         Route::post('/cable-tv-pay2', 'MerchantController@cabletvpay2')->name('cabletvpay2');
         Route::get('/electricity', 'MerchantController@electricity')->name('electricity');
         Route::post('/electricity', 'MerchantController@electricitypost')->name('electricitypost');
         Route::get('/electricity-preview', 'MerchantController@electricitypay')->name('powerpay');
         Route::post('/electricity-pay', 'MerchantController@electricitypay2')->name('powerpay2');
         Route::get('/internet-data', 'MerchantController@internetdata')->name('internetdata');
         Route::post('/internet-data', 'MerchantController@internetdatapost')->name('internetdatapost');
         Route::get('/internet_data', 'MerchantController@internetdata2')->name('internetdata2');
         Route::post('/internet_data', 'MerchantController@internetdatapost2')->name('internetdatapost2');
         Route::get('/phone-recharge', 'MerchantController@mobilerecharge')->name('mobilerecharge');
         Route::post('/rechargenow', 'MerchantController@rechargenow')->name('rechargenow');
         Route::get('/recharge-log', 'MerchantController@rechargelog')->name('rechargelog');
         Route::get('/internet-data-log', 'MerchantController@internetlog')->name('internetlog');
         Route::get('/cable-tv-log', 'MerchantController@tvlog')->name('tvlog');
         Route::get('/power-log', 'MerchantController@powerlog')->name('powerlog');
         Route::post('/recharge-log-result', 'MerchantController@rechargesearch')->name('rechargelogsearch');
         Route::get('/recharge-log-result', 'MerchantController@rechargesearchget')->name('rechargesearchget');
         Route::post('/data-log-result', 'MerchantController@datasearch')->name('datalogsearch');
         Route::get('/data-log-result', 'MerchantController@datasearchget')->name('datasearchget');
         Route::post('/tv-log-result', 'MerchantController@tvsearch')->name('tvlogsearch');
         Route::get('/tv-log-result', 'MerchantController@tvsearchget')->name('tvsearchget');
         Route::post('/power-log-result', 'MerchantController@powersearch')->name('powerlogsearch');
         Route::get('/power-log-result', 'MerchantController@powersearchget')->name('powersearchget');
         Route::get('/conversion-log-result', 'MerchantController@conversionlog')->name('conversionlog');
         Route::post('/conversion-log-result', 'MerchantController@conversionsearch')->name('conversionlogsearch');
         Route::get('/conversion-search-result', 'MerchantController@conversionsearchget')->name('conversionsearchget');
         Route::get('/print_voucher', 'MerchantController@printvoucher')->name('printvoucher');
         Route::post('/printvouchernow', 'MerchantController@printvouchernow')->name('printvouchernow');

        //user Deposit
        Route::get('/change-of-course-or-institution', 'HomeController@depositfiat')->name('depositfiat');
        Route::get('/waec-scratch-card', 'HomeController@waecCard')->name('waecCard');
        Route::get('/nabteb-scratch-card', 'HomeController@nabtebCard')->name('nabtebCard');
        Route::get('/neco-scratch-card', 'HomeController@necoCard')->name('necoCard');
        Route::get('/change-of-course-or-institution/{id}', 'HomeController@editChangeCourse')->name('editChangeCourse');
        Route::get('/purchased-cards', 'HomeController@purchasedScratchcards')->name('purchasedScratchcards');
        Route::get('/upload-of-olevel-or-alevel-results/{id}', 'HomeController@editUploadResult')->name('editUploadResult');
        Route::post('/save-course', 'HomeController@saveChangeOfCourse')->name('saveChangeOfCourse');
        Route::get('/direct-deposit', 'HomeController@directDeposit')->name('directDeposit');
        Route::post('/direct-deposit', 'HomeController@saveDirectDeposit')->name('saveDirectDeposit');
        Route::post('/update-course', 'HomeController@updateChangeOfCourse')->name('updateChangeOfCourse');
        Route::post('/update-upload', 'HomeController@updateUpload')->name('updateUpload');
        Route::post('/save-waec', 'HomeController@buyWaecCard')->name('buyWaecCard');
        Route::post('/save-neco', 'HomeController@buyNecoCard')->name('buyNecoCard');
        Route::post('/save-nabteb', 'HomeController@buyNabtebCard')->name('buyNabtebCard');
        Route::post('/save-uplaod', 'HomeController@saveUpload')->name('saveUpload');
        Route::get('/fund-wallet', 'HomeController@fund_wallet')->name('fund_wallet');
        Route::get('/deposit-crypto', 'HomeController@depositcrypto')->name('depositcrypto');
        Route::get('/service/{name}', 'HomeController@services')->name('user.service');
        Route::post('/services', 'HomeController@buyService')->name('user.buyService');
        Route::get('/deposit', 'HomeController@depositLog')->name('deposit');
        Route::post('/deposit', 'HomeController@deposit')->name('deposit');
        Route::post('/deposit-data-insert', 'HomeController@depositDataInsert')->name('deposit.data-insert');
        Route::get('/deposit-preview', 'HomeController@depositPreview')->name('user.deposit.preview');
        Route::post('/deposit-confirm', 'PaymentController@depositConfirm')->name('deposit.confirm');
        Route::post('/crypto/payment/status', 'PaymentController@cryptoStatus')->name('userDepositCrypto');
        Route::post('/apply', 'HomeController@apply')->name('jobapply');

        Route::get('/card-confirm/{id}', 'PaymentController@cardpay')->name('cardpay');
        Route::get('/activate-confirm/{id}', 'PaymentController@activatepay')->name('activatepay');
        Route::get('/plan-confirm/{id}', 'GiftcardController@activateplan')->name('activateplan');

        Route::get('/withdraw', 'HomeController@withdrawMoney')->name('withdraw.money');
        Route::post('/withdraw/crypto', 'HomeController@requestcrypto')->name('withdraw.crypto');
        Route::post('/withdraw/deposit', 'HomeController@requestwithdrawal')->name('withdraw.depo');
        Route::post('/withdraw-submit', 'HomeController@requestSubmit')->name('withdraw.submit');


        Route::get('/wallet', 'HomeController@wallet')->name('wallet');
        Route::post('/wallet', 'HomeController@updatewallet')->name('update.wallet');


        Route::get('/sms', 'HomeController@sms')->name('sms');
        Route::post('/sms', 'HomeController@sendsms')->name('send.sms');
        Route::get('/sms-log', 'HomeController@smslog')->name('smslog');
        Route::get('/transfer', 'HomeController@transfer')->name('transfer');
        Route::post('/transfer', 'HomeController@updatetransfer')->name('update.transfer');
        Route::get('/matrix-earning', 'HomeController@convertmatrix')->name('convertmarix');
        Route::get('/convert', 'HomeController@convertbonus')->name('convertbonus');
        Route::post('/convertmatrix', 'HomeController@updateconvertmatrix')->name('update.convertmatrix');
        Route::post('/convert', 'HomeController@updateconvert')->name('update.convert');
        Route::get('/transfer-log', 'HomeController@transferlog')->name('transferlog');

        Route::get('/transaction-log', 'HomeController@activity')->name('user.trx');
        Route::get('/upload-of-olevel-or-alevel-results', 'HomeController@depositLog')->name('user.depositLog');
        Route::get('/withdrawal-log', 'HomeController@withdrawLog')->name('user.withdrawLog');

        Route::get('change-password', 'HomeController@changePassword')->name('user.change-password');
        Route::post('change-password', 'HomeController@submitPassword')->name('user.change-password');


        Route::post('change-pin', 'HomeController@submitPin')->name('user.change-pin');

        Route::post('pin-toggle', 'HomeController@submitPin2')->name('pintoggle');

        Route::post('log-toggle', 'HomeController@logtoggle')->name('logtoggle');

        Route::post('start-gfa', 'HomeController@startgfa')->name('startgfa');

        Route::post('stopgfa', 'HomeController@stopgfa')->name('stopgfa');


        Route::get('my-account', 'HomeController@Profile')->name('profile');
        Route::post('my-account', 'HomeController@submitProfile')->name('edit-profile');
        Route::get('my-security', 'HomeController@security')->name('security');
        Route::get('activity-log', 'HomeController@activitylog')->name('activities');
        Route::get('referral-log', 'HomeController@referral')->name('referral');
        Route::get('verification', 'HomeController@kyc')->name('verification');
        Route::post('verification2', 'HomeController@kyc2')->name('document.upload');

         //Bank
        Route::get('payment-account', 'HomeController@bank')->name('bank');
        Route::post('bank', 'HomeController@postbank')->name('post.banky');


        //Message
         Route::get('create_message', 'HomeController@messages')->name('createmessage');
         Route::post('createtitcket', 'HomeController@postticket')->name('post.ticket');
         Route::post('replyticket', 'HomeController@replyticket')->name('post.ticket2');
         Route::get('create_testimonial', 'HomeController@usertest')->name('user.testimonial');
         Route::post('create_testimonial', 'HomeController@posttestimonial')->name('post.testimonial');
         Route::get('inbox', 'HomeController@inbox')->name('inbox');
         Route::get('notifications', 'HomeController@notifications')->name('notifications');
         Route::get('ticket/{id}', 'HomeController@ticketview')->name('ticket-view');
         Route::get('inbox/{id}', 'HomeController@inboxview')->name('inbox-view');
         Route::get('inbox/delete/{id}', 'HomeController@inboxdelete')->name('inbox-delete');
         Route::get('support-ticket', 'HomeController@tickets')->name('ticket');





        //Trade
         Route::post('/buy-ecoin', 'HomeController@buyecoin')->name('buyecoin');
         Route::get('/ebuy-online', 'HomeController@ebuyonlinePreview')->name('user.ebuy');
         Route::get('/ebuy-submit/{id}', 'HomeController@ebuyonlinepost')->name('ebuypost');
         Route::get('/ebuy-pay/{id}', 'HomeController@ebuyonlinepay')->name('ebuypost2');
         Route::get('/ebuy-del/{id}', 'HomeController@ebuydel')->name('ebuydel');
         Route::get('/ebuy-pay', 'HomeController@ebuyonlinepost2')->name('ebuypost2');
         Route::post('/ebuy-upload', 'HomeController@ebuyupload')->name('ebuyupload');
         Route::get('/purchase-log', 'HomeController@buylog')->name('buylog');
         Route::get('/market-trade-log', 'HomeController@buymartlog')->name('buymartlog');


         Route::get('/trx-del/{id}', 'HomeController@trxdel')->name('trxdel');

         Route::post('/sell-ecoin', 'HomeController@sellecoin')->name('sellecoin');

         Route::get('/esell-online', 'HomeController@esellonlinePreview')->name('user.esell');
         Route::get('/esell-submit/{id}', 'HomeController@esellonlinepost')->name('esellpost');
         Route::get('/esell-pay', 'HomeController@esellonlinepay')->name('esellpost2');
         Route::get('/esell-pay/{id}', 'HomeController@esellscan2')->name('esellpost22');
         Route::get('/esell-scan', 'HomeController@esellscan')->name('esellscan');

         Route::get('/esell-del/{id}', 'HomeController@eselldel')->name('eselldel');
         Route::post('/esell-upload', 'HomeController@esellupload')->name('esellupload');
         Route::get('/sales-log', 'HomeController@sellog')->name('sellog');



        //Blockchain
        Route::get('blockchain/{id}','HomeController@blockchainwallet')->name('blockchainwallet');
        Route::get('createwallet/{id}','HomeController@createwallet')->name('createwallet');
        Route::get('/wallet/{id}', 'HomeController@viewwallets')->name('viewwallet');

        Route::post('/send/coin', 'HomeController@sendcoin')->name('sendcoin');
        Route::post('/send/preview', 'HomeController@sendpreview')->name('sendpreview');
        Route::get('/wallet-sent/{id}', 'HomeController@walletsent')->name('walletsent');
        Route::get('/wallet-received/{id}', 'HomeController@walletreceived')->name('walletreceived');
        Route::post('/send/coin', 'HomeController@sendcoin')->name('sendcoin');


          //pin-recharge
            Route::get('/pin-recharge', 'HomeController@pinRecharge')->name('pin.recharge');
            Route::post('/pin-recharge', 'HomeController@pinRechargePost')->name('pin.recharge.post');
            Route::post('/pin-generate', 'HomeController@pinGenerate')->name('pin.generate');

            Route::get('/pin-recharged', 'HomeController@EPinRecharge')->name('e_pin.recharge');
            Route::get('/pin-generated', 'HomeController@EPinGenerated')->name('e_pin.generated');

             //mlm
            Route::get('/matrix/upgrade', 'HomeController@matrixupgrade')->name('matrixupgrade');
            Route::get('/matrix/{lv_no}', 'HomeController@matrixIndex')->name('matrix.index');


            Route::get('/my-histories', 'HomeController@transactionHistory')->name('transaction-history');
            Route::get('/payment-transactions', 'HomeController@paymentTransactions')->name('payment-transactions');
            Route::get('/payment/callback', 'HomeController@verifyPaystackPayment');
                 //plan
              Route::post('/activate-plan', 'HomeController@planactivate')->name('activateplan');
              Route::post('/fund-wallet', 'HomeController@wallet_funding')->name('fund-wallet');
              Route::post('/paystack-payment', 'HomeController@paystack_payment')->name('paystack-payment');
              Route::post('/wallet-payment', 'HomeController@payWithWallet')->name('wallet-payment');
              Route::get('/plan', 'HomeController@planIndex')->name('plan.index');
              Route::post('/plan', 'HomeController@planStore')->name('plan.purchase');
              Route::post('/registration/package', 'HomeController@registrationPlan')->name('registration.package');






        //Trade
        Route::get('/buy-coin', 'HomeController@buycoin')->name('buy');
        Route::post('/buy-wallet', 'HomeController@buywallet')->name('buy.wallet');
        Route::post('/buy-online', 'HomeController@buyonline')->name('buy.online');
        Route::get('/buy-online', 'HomeController@buyonlinePreview')->name('user.onlinebuy');
        Route::post('/pay-paystack', 'PaymentController@buypaystack')->name('buy.paystack');
        Route::post('/pay-rave', 'PaymentController@buyrave')->name('buy.rave');
        Route::post('/pay-wallet', 'PaymentController@buywallet')->name('buy.wallet');
        Route::post('/pay-bank', 'PaymentController@buybank')->name('buy.bank');
        Route::post('/buystripe', 'PaymentController@buystripe')->name('buy.stripe');
        Route::get('/sell-coin', 'HomeController@sellcoin')->name('sell');

        Route::get('/sell-market', 'HomeController@sellmarket')->name('sellonmarket');
        Route::post('/sell-market', 'HomeController@sellmarketpost')->name('sellonmarketpost');
        Route::post('/sell-wallet', 'HomeController@sellwallet')->name('sell.wallet');
        Route::post('/sell-online', 'HomeController@sellonline')->name('sell.online');
        Route::get('/mystore', 'HomeController@mystore')->name('mystore');
        Route::get('/view-deal/{id}', 'HomeController@viewdeal')->name('viewstore');
        Route::get('/active-deals', 'HomeController@activedeal')->name('activedeal');
        Route::get('/closed-deals', 'HomeController@closeddeal')->name('closeddeal');
        Route::post('/close-market/{id}', 'HomeController@closemarket')->name('closemarket');
        Route::post('/open-market/{id}', 'HomeController@openmarket')->name('openmarket');
        Route::post('/vieworder', 'HomeController@vieworder')->name('view-order');
        Route::get('/vieworder', 'HomeController@vieworder2')->name('vieworder');
        Route::get('/buy-market', 'HomeController@buymarket')->name('buyonmarket');
        Route::post('/buy-market', 'HomeController@buymarketpost')->name('buyonmarketpost');
        Route::get('/coin-market', 'HomeController@coinmarket')->name('coinmarket');
        Route::post('/pay-market', 'HomeController@paymarket')->name('paymarket');
        Route::get('/pay-market', 'HomeController@marketpaypreview')->name('market.paypreview');
        Route::post('/paid-market', 'HomeController@marketpay')->name('marketpaid');
        Route::post('/search-market', 'HomeController@searchmarket')->name('searchmarket');
        Route::post('/search-market-place', 'HomeController@searchmarketplace')->name('searchmarketplace');

        Route::post('/market_paystack', 'PaymentController@marketpaystack')->name('marketpaystack');
        Route::post('/market_rave', 'PaymentController@marketrave')->name('marketrave');
        Route::post('/market_approve/{id}', 'HomeController@approvemarketsale')->name('approvemarketsale');
        Route::post('/market_reject/{id}', 'HomeController@rejectmarketsale')->name('rejectmarketsale');
        Route::post('/market_approve2/{id}', 'HomeController@approvemarketsale2')->name('approvemarketsale2');
        Route::post('/market_reject2/{id}', 'HomeController@rejectmarketsale2')->name('rejectmarketsale2');
        Route::post('/messagebuyer/{id}', 'HomeController@messagebuyer')->name('messagebuyer');
        Route::get('/viewtrx/{id}', 'HomeController@viewtrx')->name('viewtrx');


        Route::post('buy','HomeController@buy')->name('buy.amount');
        Route::get('buy/{trx}','HomeController@buyPreview')->name('buy.buyPreview');
        Route::post('confirm-buy','HomeController@buyConfirm')->name('buy.confirmed');
        Route::post('confirm-buy-slip','HomeController@buyConfirmSlip')->name('buy.confirmed.slip');

        Route::post('sell','HomeController@sell')->name('sell.amount');
        Route::get('sell/{trx}','HomeController@sellPreview')->name('sell.preview');
        Route::post('confirm-sell','HomeController@sellConfirm')->name('sell.confirmed');
        Route::post('confirm-sell-bank','HomeController@sellConfirmBank')->name('sell.confirmed.bank');

        Route::post('exchange/wallet','HomeController@exchangewallet')->name('exchange.wallet');
        Route::post('exchange/online','HomeController@exchangeonline')->name('exchange.online');
        Route::get('exchange','HomeController@exchange')->name('exchange');

        Route::get('transactions','HomeController@transactions')->name('transaction');
    });

});

Route::group(['prefix' => 'cbt'], function () {
    Route::get('/', 'CbtLoginController@index')->name('cbt.loginForm');
    Route::post('/', 'CbtLoginController@authenticate')->name('cbt.login');
});
Route::group(['prefix' => 'cbt', 'middleware' => 'auth:cbt'], function () {
    Route::get('/dashboard', 'CbtController@dashboard')->name('cbt.dashboard');
    Route::get('/change-of-institution', 'CbtController@changeOfInstitution')->name('cbt.change');
    Route::get('/result-uploads', 'CbtController@cbtUploads')->name('cbt.uploads');
    Route::get('/withdraw', 'CbtController@withdrawLog')->name('cbt.withdraw');
    Route::get('/histories', 'CbtController@cbtHistories')->name('cbt.histories');
    Route::get('/withdraw-log', 'CbtController@withdrawHistory')->name('cbt.withdraw-log');
    Route::get('/result-upload/{id}', 'CbtController@cbtUpload')->name('cbt.upload');
    Route::get('my-account', 'CbtController@Profile')->name('cbt.profile');
    Route::post('my-account', 'CbtController@submitProfile')->name('cbt.edit-profile');
    Route::get('my-security', 'CbtController@Security')->name('cbt.security');
    Route::get('/change-password', 'CbtController@ChangePassword')->name('cbt.password');
    Route::post('/change-password', 'CbtController@submitPassword')->name('cbt.change-password');
    Route::get('/change-of-institution/{id}', 'CbtController@changeOfInstitutionDetails')->name('cbt.change-details');
    Route::post('/logout', 'CbtController@logout')->name('cbt.logout');
    Route::post('/save-course', 'CbtController@updateChangeOfCourse')->name('cbt-updateChangeOfCourse');
    Route::post('/save-upload', 'CbtController@updateUpload')->name('cbt-updateUpload');
    Route::post('/save-withdraw', 'CbtController@saveWithdraw')->name('cbt-saveWithdraw');
    Route::post('/bank', 'CbtController@postbank')->name('cbt.post.banky');
    
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminLoginController@index')->name('admin.loginForm');
    Route::post('/', 'AdminLoginController@authenticate')->name('admin.login');
});


Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {



    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');


    Route::get('/exchange-log', 'AdminController@exchangeLog')->name('exchange-currency');
    Route::get('/exchange-log/{id}', 'AdminController@exchangeInfo')->name('exchange-info');
    Route::get('/exchange-approve/{id}', 'AdminController@exchangeapprove')->name('exchange.approve');
    Route::get('/exchange-reject/{id}', 'AdminController@exchangereject')->name('exchange.reject');
    Route::post('/exchange-action', 'AdminController@exchangeAction')->name('exchange-action');

     Route::get('/exchange-pproved', 'AdminController@proex')->name('proex');
    Route::get('/exchnage-pending', 'AdminController@penex')->name('penex');
    Route::get('/exchnage-declined', 'AdminController@decex')->name('decex');
    Route::get('/card-info/{id}', 'AdminController@cardinfo')->name('card-info');
    Route::get('/approvegift/{id}', 'AdminController@approvegift')->name('appgift');
    Route::get('/rejectgift/{id}', 'AdminController@rejectgift')->name('rejgift');

 Route::get('/exchange-pproved', 'AdminController@proex')->name('proex');
    Route::get('/exchange-pending', 'AdminController@penex')->name('penex');
    Route::get('/exchange-declined', 'AdminController@decex')->name('decex');
    Route::get('/card-info/{id}', 'AdminController@cardinfo')->name('card-info');
    Route::get('/approvegift/{id}', 'AdminController@approvegift')->name('appgift');
    Route::get('/rejectgift/{id}', 'AdminController@rejectgift')->name('rejgift');
    Route::get('/sell-log', 'AdminController@sellLog')->name('sell-currency');
    Route::get('/pending-sell-log', 'AdminController@pendingsellLog')->name('pendingsell-currency');
    Route::get('/declined-sell-log', 'AdminController@declinedsellLog')->name('declinedsell-currency');
    Route::get('/sell-log/{id}', 'AdminController@sellInfo')->name('sell-info');
    Route::get('/sell-approve/{id}', 'AdminController@sellapprove')->name('sell.approve');
    Route::get('/sell-reject/{id}', 'AdminController@sellreject')->name('sell.reject');

    Route::get('/buy-log', 'AdminController@buyLog')->name('buy-currency');
    Route::get('/pending-buy-log', 'AdminController@pendingbuyLog')->name('pendingbuy-currency');
    Route::get('/declined-buy-log', 'AdminController@declinedbuyLog')->name('declinedbuy-currency');
    Route::get('/buy-log/{id}', 'AdminController@buyInfo')->name('buy-info');
    Route::get('/buy-app/{id}', 'AdminController@buyapprove')->name('buy.approve');
    Route::get('/buy-rej/{id}', 'AdminController@buyreject')->name('buy.reject');





    //Merchants
    Route::get('/cabletv-settings', ['uses'=>'AdminMerchantController@managecabletv', 'middleware'=>'sales'])->name('admin.cabletv');
    Route::get('/cabletv-view/{id}', ['uses'=>'AdminMerchantController@managecabletvview', 'middleware'=>'sales'])->name('admin.cabletvview');
    Route::get('/cabletv-enable/{id}', ['uses'=>'AdminMerchantController@managecabletvenable', 'middleware'=>'sales'])->name('admin.cabletvenable');
    Route::get('/cabletv-disable/{id}', ['uses'=>'AdminMerchantController@managecabletvdisable', 'middleware'=>'sales'])->name('admin.cabletvdisable');
    Route::get('/cabletvplan-enable/{id}', ['uses'=>'AdminMerchantController@managecabletvplanenable', 'middleware'=>'sales'])->name('admin.cabletvplanenable');
    Route::get('/cabletvplan-disable/{id}', ['uses'=>'AdminMerchantController@managecabletvplandisable', 'middleware'=>'sales'])->name('admin.cabletvplandisable');
    Route::get('/cabletvplan-view/{id}', ['uses'=>'AdminMerchantController@managecabletvplanview', 'middleware'=>'sales'])->name('admin.cabletvplanview');
    Route::get('/cabletv-log', ['uses'=>'AdminMerchantController@cabletvtrx', 'middleware'=>'sales'])->name('admin.cabletvplantrx');
    Route::post('/cabletv-search', ['uses'=>'AdminMerchantController@cabletvtrxearch', 'middleware'=>'sales'])->name('admin.cabletvplansearch');
    Route::get('/cabletv-log/{id}', ['uses'=>'AdminMerchantController@cabletvtrxind', 'middleware'=>'sales'])->name('cabletvind');
    Route::post('/cabletvplan-update/{id}', ['uses'=>'AdminMerchantController@managecabletvplanpost', 'middleware'=>'sales'])->name('admin.cabletvplanpost');
    Route::get('/power-settings', ['uses'=>'AdminMerchantController@managepower', 'middleware'=>'sales'])->name('admin.power');
    Route::get('/power-view/{id}', ['uses'=>'AdminMerchantController@managepowerview', 'middleware'=>'sales'])->name('admin.powerview');
    Route::get('/power-enable/{id}', ['uses'=>'AdminMerchantController@managepowerenable', 'middleware'=>'sales'])->name('admin.powervenable');
    Route::get('/power-disable/{id}', ['uses'=>'AdminMerchantController@managepowerdisable', 'middleware'=>'sales'])->name('admin.powerdisable');
    Route::post('/power-update/{id}', ['uses'=>'AdminMerchantController@managepowerpost', 'middleware'=>'sales'])->name('admin.powerpost');
    Route::get('/power-sales', ['uses'=>'AdminMerchantController@powertrx', 'middleware'=>'sales'])->name('admin.powersales');
    Route::get('/power-sales/{id}', ['uses'=>'AdminMerchantController@powertrxind', 'middleware'=>'sales'])->name('admin.powerind');
    Route::get('/internet-data', ['uses'=>'AdminMerchantController@internet', 'middleware'=>'sales'])->name('admin.internet');
    Route::get('/internet-view/{id}', ['uses'=>'AdminMerchantController@manageinternetview', 'middleware'=>'sales'])->name('admin.internetview');
    Route::get('/internet-enable/{id}', ['uses'=>'AdminMerchantController@manageinternetenable', 'middleware'=>'sales'])->name('admin.internetenable');
    Route::get('/internet-disable/{id}', ['uses'=>'AdminMerchantController@manageinternetdisable', 'middleware'=>'sales'])->name('admin.internetdisable');
    Route::get('/internetplan-enable/{id}', ['uses'=>'AdminMerchantController@manageinternetplanenable', 'middleware'=>'sales'])->name('admin.internetplanenable');
    Route::get('/internetplan-disable/{id}', ['uses'=>'AdminMerchantController@manageinternetplandisable', 'middleware'=>'sales'])->name('admin.internetplandisable');
    Route::get('/internetplan-view/{id}', ['uses'=>'AdminMerchantController@manageinternetplanview', 'middleware'=>'sales'])->name('admin.internetplanview');
    Route::post('/internetplan-update/{id}', ['uses'=>'AdminMerchantController@manageinternetplanpost', 'middleware'=>'sales'])->name('admin.internetplanpost');
    Route::get('/internet-sales', ['uses'=>'AdminMerchantController@internettrx', 'middleware'=>'sales'])->name('admin.internetsales');
    Route::get('/internet-sales-ind/{id}', ['uses'=>'AdminMerchantController@internettrxind', 'middleware'=>'sales'])->name('admin.internetsalesind');
    Route::post('/internet-plan-search', ['uses'=>'AdminMerchantController@internettrxsearch', 'middleware'=>'sales'])->name('admin.intplansearch');
    Route::get('/airtime-network', ['uses'=>'AdminMerchantController@airtime', 'middleware'=>'sales'])->name('admin.airtime');
    Route::get('/airtime-enable/{id}', ['uses'=>'AdminMerchantController@manageairtimeenable', 'middleware'=>'sales'])->name('admin.airtimeenable');
    Route::get('/airtime-disable/{id}', ['uses'=>'AdminMerchantController@manageairtimedisable', 'middleware'=>'sales'])->name('admin.airtimedisable');
    Route::get('/airtime-sales', ['uses'=>'AdminMerchantController@airtimetrx', 'middleware'=>'sales'])->name('admin.airtimesales');
    Route::get('/airtime-sales-ind/{id}', ['uses'=>'AdminMerchantController@airtimetrxind', 'middleware'=>'sales'])->name('admin.airtimesalesind');
    Route::post('/airtime-sales-search', ['uses'=>'AdminMerchantController@airtimetrxsearch', 'middleware'=>'sales'])->name('admin.airtimesearch');
    Route::get('/airtime-swap', ['uses'=>'AdminMerchantController@airtimeswaptrx', 'middleware'=>'sales'])->name('admin.airtimeswap');
    Route::get('/airtime-swap-ind/{id}', ['uses'=>'AdminMerchantController@airtimeswaptrxind', 'middleware'=>'sales'])->name('admin.airtimeswapind');
    Route::get('/airtime-swap-app/{id}', ['uses'=>'AdminMerchantController@airtimeswaptrxapp', 'middleware'=>'sales'])->name('admin.airtimeswapapp');
    Route::get('/airtime-swap-rej/{id}', ['uses'=>'AdminMerchantController@airtimeswaptrxrej', 'middleware'=>'sales'])->name('admin.airtimeswaprej');
    Route::post('/airtime-swap-search', ['uses'=>'AdminMerchantController@airtimeswaptrxsearch', 'middleware'=>'sales'])->name('admin.airtimeswapsearch');

      Route::get('/airtime-swap-manage', ['uses'=>'AdminMerchantController@airtimeswaprate', 'middleware'=>'sales'])->name('admin.airtimeswapmanage');

        Route::get('/swap-enable/{id}', ['uses'=>'AdminMerchantController@manageswapenable', 'middleware'=>'sales'])->name('admin.swapenable');
    Route::get('/swap-disable/{id}', ['uses'=>'AdminMerchantController@manageswapdisable', 'middleware'=>'sales'])->name('admin.swapdisable');


        Route::get('/swap-view/{id}', ['uses'=>'AdminMerchantController@manageswapview', 'middleware'=>'sales'])->name('admin.swapview');

      Route::post('/airtime-swap-posts', ['uses'=>'AdminMerchantController@airtimeswappost', 'middleware'=>'sales'])->name('admin.airtimeswapmanagepost');




    // General Settings
    Route::get('/general-settings', ['uses'=>'GeneralSettingController@GenSetting','middleware'=>'settings'])->name('admin.GenSetting');
    Route::post('/general-settings', ['uses'=>'GeneralSettingController@UpdateGenSetting','middleware'=>'settings'])->name('admin.UpdateGenSetting');


    // Merchant Settings
    Route::get('/merchant-settings', ['uses'=>'GeneralSettingController@merchantSetting','middleware'=>'settings'])->name('merchantapi');
    Route::post('/merchant-settings', ['uses'=>'GeneralSettingController@updatemerchantSetting','middleware'=>'settings'])->name('merchantapipost');


     // General Settings
    Route::get('/blockchain-settings', ['uses'=>'GeneralSettingController@blockchainSetting','middleware'=>'settings'])->name('admin.blockchainSetting');
    Route::post('/blockchain-settings', ['uses'=>'GeneralSettingController@UpdateblockchainSetting','middleware'=>'settings'])->name('admin.UpdateblockchainSetting');

    //Contact Setting
    Route::get('contact-setting', 'GeneralSettingController@getContact')->name('contact-setting');
    Route::put('contact-setting/{id}', 'GeneralSettingController@putContactSetting')->name('contact-setting-update');


    // Admin Settings
    Route::get('/change-password', 'AdminController@changePassword')->name('admin.changePass');
    Route::post('/change-password', 'AdminController@updatePassword')->name('admin.changePass');
    Route::get('/profile', 'AdminController@profile')->name('admin.profile');
    Route::post('/profile', 'AdminController@updateProfile')->name('admin.profile');



        //Blockchain
        Route::get('blockchain/{id}','BlockchainController@blockchainwallet')->name('admin.blockchainwallet');
        Route::get('createwallet/{id}','BlockchainController@createwallet')->name('admin.createwallet');
        Route::get('/wallet/{id}', 'BlockchainController@viewwallets')->name('admin.viewwallet');

        Route::post('/send/coin', 'BlockchainController@sendcoin')->name('admin.sendcoin');
        Route::post('/send/preview', 'BlockchainController@sendpreview')->name('admin.sendpreview');
        Route::get('/wallet-sent/{id}', 'BlockchainController@walletsent')->name('admin.walletsent');
        Route::get('/wallet-received/{id}', 'BlockchainController@walletreceived')->name('admin.walletreceived');
        Route::post('/send/coin', 'BlockchainController@sendcoin')->name('admin.sendcoin');
        Route::get('/block_wallet/{id}', 'BlockchainController@blockwallet')->name('admin.blockwallet');
        Route::get('/unblock_wallet/{id}', 'BlockchainController@unblockwallet')->name('admin.unblockwallet');

 //Offer
 Route::get('/active-market', 'MarketController@activeoffer')->name('activeoffer');
 Route::get('/inactive-market', 'MarketController@inactiveoffer')->name('inactiveoffer');
 Route::get('/activate-market/{id}', 'MarketController@actdeal')->name('actdeal');
 Route::get('/deactivate-market/{id}', 'MarketController@deactdeal')->name('deactdeal');
 Route::get('/delete-market/{id}', 'MarketController@deldeal')->name('deldeal');
 Route::get('/pending-offer', 'MarketController@orderpend')->name('orderpend');
 Route::get('/processed-offer', 'MarketController@orderprocessed')->name('orderprocess');
 Route::get('/rejected-offer', 'MarketController@orderrej')->name('orderrej');
 Route::get('/view-deal/{id}', 'MarketController@viewdeal')->name('viewdeal');
 Route::get('/approved-deal/{id}', 'MarketController@dealapp')->name('dealapp');
 Route::get('/approved-rej/{id}', 'MarketController@dealrej')->name('dealrej');


    Route::resource('currency','CurrencyController');
     Route::get('/activate-coin/{id}', 'CurrencyController@activate')->name('activatecoin');
    Route::get('/deactivate-coin/{id}', 'CurrencyController@deactivate')->name('deactivatecoin');
    Route::get('/delete-coin/{id}', 'CurrencyController@delete')->name('deletecoin');
    Route::post('/post-coin/', 'CurrencyController@post')->name('postcoin');



    Route::resource('giftcard','GiftcardController');
     Route::get('/packages', 'GiftcardController@package')->name('package.type');
     Route::get('/prices', 'GiftcardController@service')->name('admin.service');
     Route::get('/edit-prices/{id}', 'GiftcardController@editService')->name('admin.edit-service');
     Route::get('/gift-card', 'GiftcardController@gifttype')->name('giftcard.type');
     Route::get('/activate-card/{id}', 'GiftcardController@activate')->name('activatecard');
     Route::get('/activate-service/{id}', 'GiftcardController@activateService')->name('activateService');
     Route::get('/activate-pack/{id}', 'GiftcardController@activatepack')->name('activatepack');
     Route::get('/edit-card/{id}', 'GiftcardController@edit')->name('editcard');
     Route::get('/edit-card-type/{id}', 'GiftcardController@edittype')->name('editcardtype');
     Route::get('/edit-cardtype/{id}', 'GiftcardController@edittype2')->name('editcardtype2');
    Route::get('/deactivate-card/{id}', 'GiftcardController@deactivate')->name('deactivatecard');
    Route::get('/delete-card/{id}', 'GiftcardController@delete')->name('deletecard');
    Route::get('/deactivate-service/{id}', 'GiftcardController@deactivateService')->name('deactivateService');
    Route::get('/delete-service/{id}', 'GiftcardController@deleteService')->name('deleteService');
    Route::get('/deactivate-pack/{id}', 'GiftcardController@deactivatepack')->name('deactivatepack');
    Route::get('/delete-pack/{id}', 'GiftcardController@deletepack')->name('deletepack');
    Route::post('/post-card/', 'GiftcardController@post')->name('postcard');
    Route::post('/post-cardtypepost/', 'GiftcardController@posttype')->name('postcardtype');
    Route::post('/store-package/', 'GiftcardController@storepack')->name('storepack');
    Route::post('/edit-package/', 'GiftcardController@editpack')->name('editpack');
    Route::post('/store-card/', 'GiftcardController@store')->name('storecard');
    Route::post('/saveService/', 'GiftcardController@saveService')->name('saveService');
    Route::post('/updateService/', 'GiftcardController@updateService')->name('updateService');
    Route::post('/store-cardtype/{id}', 'GiftcardController@storetype')->name('storecard2');
     Route::get('/activate-cardtype/{id}', 'GiftcardController@activatetype')->name('activatecardtype');
     Route::get('/deactivate-cardtype/{id}', 'GiftcardController@deactivatetype')->name('deactivatecardtype');
    Route::get('/delete-cardtype/{id}', 'GiftcardController@deletetype')->name('deletecardtype');





    //Gateway
    Route::get('/gateway', ['uses'=>'GatewayController@show', 'middleware'=>'settings'])->name('gateway');
    Route::get('/actgateway/{id}', ['uses'=>'GatewayController@act', 'middleware'=>'settings'])->name('activate.gateway');
    Route::get('/deactgateway/{id}', ['uses'=>'GatewayController@deact', 'middleware'=>'settings'])->name('deactivate.gateway');
    Route::post('/gateway', ['uses'=>'GatewayController@update', 'middleware'=>'settings'])->name('update.gateway');

    //Deposit
    Route::get('/deposits', ['uses'=>'DepositController@index','middleware'=>'deposit'])->name('deposits');
    Route::get('/deposits/requests', ['uses'=>'DepositController@requests', 'middleware'=>'deposit'])->name('deposits.requests');
    Route::get('/deposits/declined', ['uses'=>'DepositController@depodec','middleware'=>'deposit'])->name('deposits.declined');
    Route::get('/deposit/approve/{id}', 'DepositController@approve')->name('deposit.approve');
    Route::get('/deposit/view/{id}', 'DepositController@view')->name('deposit.view');
    Route::get('/deposit/{deposit}/delete', 'DepositController@destroy')->name('deposit.destroy');

   //Transfer
    Route::get('/transfer/requests', ['uses'=>'DepositController@transfer', 'middleware'=>'transfer'])->name('transfer.log');
    Route::get('/transfer/delete/{id}', ['uses'=>'DepositController@transferdelete', 'middleware'=>'transfer'])->name('transfer.delete');
    Route::get('/transfer/{id}', ['uses'=>'DepositController@transferview', 'middleware'=>'transfer'])->name('transfer.view');

    //withdraw
    Route::get('/withdraw', 'WithdrawController@index')->name('withdraw');
    Route::post('/withdraw', 'WithdrawController@delete')->name('add.withdraw.method');
    Route::post('/withdraw-update', 'WithdrawController@withdrawUpdateSettings')->name('update.wsettings');

    Route::get('/withdraw/requests', ['uses'=>'WithdrawController@requests', 'middleware'=>'withdraw'])->name('withdraw.requests');
    Route::get('/withdraw/approved', ['uses'=>'WithdrawController@requestsApprove', 'middleware'=>'withdraw'])->name('withdraw.approved');
    Route::get('/withdraw/refunded', ['uses'=>'WithdrawController@requestsRefunded', 'middleware'=>'withdraw'])->name('withdraw.refunded');

    Route::get('/withdraw/view/{id}', ['uses'=>'WithdrawController@view', 'middleware'=>'withdraw'])->name('withdraw.view');
    Route::get('/withdraw/approve/{id}', ['uses'=>'WithdrawController@approve', 'middleware'=>'withdraw'])->name('withdraw.approve');
    Route::get('/withdraw/refund/{id}', ['uses'=>'WithdrawController@refundAmount', 'middleware'=>'withdraw'])->name('withdraw.reject');
    Route::get('/withdraw/delete/{id}', ['uses'=>'WithdrawController@deleteAmount', 'middleware'=>'withdraw'])->name('withdraw.delete');



     //Plan & Matrix Controller
     Route::get('/manage-epins', ['uses'=>'PlanController@epin', 'middleware'=>'sales'])->name('manage.epin');
     Route::get('/used-epins', ['uses'=>'PlanController@usedepin', 'middleware'=>'sales'])->name('used.epin');
     Route::post('/adminpingenerate', ['uses'=>'PlanController@adminpingenerate', 'middleware'=>'sales'])->name('adminpingenerate');
     Route::get('/manage-levels', ['uses'=>'PlanController@levels', 'middleware'=>'sales'])->name('manage.level');
     Route::get('/manage-plans', ['uses'=>'PlanController@plans', 'middleware'=>'sales'])->name('manage.plans');
     Route::post('matrix', ['uses'=>'PlanController@matrix', 'middleware'=>'sales'])->name('matrix.update');
     Route::get('edit-plan/{plan}', ['uses'=>'PlanController@edit', 'middleware'=>'sales'])->name('plan.edit');
     Route::put('edit-update', ['uses'=>'PlanController@update', 'middleware'=>'sales'])->name('plan.update');
     Route::get('create-plan', ['uses'=>'PlanController@create', 'middleware'=>'sales'])->name('plan.create');
     Route::post('store-plan', ['uses'=>'PlanController@store', 'middleware'=>'sales'])->name('plan.store');


    //Blog Controller
    Route::get('/blog-category', 'PostController@category')->name('admin.cat');
    Route::post('/blog-category', 'PostController@UpdateCategory')->name('update.cat');
    Route::get('blog', 'PostController@index')->name('admin.blog');
    Route::get('blog/create', 'PostController@create')->name('blog.create');
    Route::post('blog/create', 'PostController@store')->name('blog.store');
    Route::delete('blog/delete', 'PostController@destroy')->name('blog.delete');
    Route::get('blog/edit/{id}', 'PostController@edit')->name('blog.edit');
    Route::post('blog-update', 'PostController@updatePost')->name('blog.update');

    /*Manage Faq*/
    Route::get('faqs-create', 'FaqController@createFaqs')->name('faqs-create');
    Route::post('faqs-create', 'FaqController@storeFaqs')->name('faqs-create');
    Route::get('faqs', 'FaqController@allFaqs')->name('faqs-all');
    Route::get('faqs-edit/{id}', 'FaqController@editFaqs')->name('faqs-edit');
    Route::put('faqs-edit/{id}', 'FaqController@updateFaqs')->name('faqs-update');
    Route::get('faqs-delete/{id}', 'FaqController@deleteFaqs')->name('faqs-delete');

    //    SubscriberController
    Route::get('/subscribers', 'SubscriberController@manageSubscribers')->name('manage.subscribers');
    Route::post('/update-subscribers', 'SubscriberController@updateSubscriber')->name('update.subscriber');
    Route::get('/send-email', 'SubscriberController@sendMail')->name('send.mail.subscriber');
    Route::post('/send-email', 'SubscriberController@sendMailsubscriber')->name('send.email.subscriber');

    //    Testimonial Controller
    Route::get('testimonial', 'TestimonialController@index')->name('admin.testimonial');
    Route::get('testimonial/create', 'TestimonialController@create')->name('testimonial.create');
    Route::post('testimonial/create', 'TestimonialController@store')->name('testimonial.store');
    Route::delete('testimonial/delete', 'TestimonialController@destroy')->name('testimonial.delete');
    Route::get('testimonial/edit/{id}', 'TestimonialController@edit')->name('testimonial.edit');
    Route::post('testimonial-update', 'TestimonialController@updatePost')->name('testimonial.update');

    //Notification

    Route::get('notification', ['uses'=>'UserManageController@usernotify', 'middleware'=>'message'])->name('user.notification');
    Route::get('job', ['uses'=>'UserManageController@job', 'middleware'=>'createuser'])->name('user.job');
    Route::get('testimonials', ['uses'=>'UserManageController@usertestimonial', 'middleware'=>'message'])->name('admin.testi');
    Route::get('testimonials/{id}', ['uses'=>'UserManageController@usertestimonialdel', 'middleware'=>'message'])->name('admin.testidel');
    Route::post('testimonials/update', ['uses'=>'UserManageController@usertestimonialupdate', 'middleware'=>'message'])->name('update.testi');
    Route::post('testimonials/create', ['uses'=>'UserManageController@usertestimonialcreate', 'middleware'=>'message'])->name('create.testi');
    Route::get('tickets', ['uses'=>'UserManageController@usertickets', 'middleware'=>'message'])->name('user.tickets');
    Route::get('user-ticket/{id}', ['uses'=>'UserManageController@userticketview', 'middleware'=>'message'])->name('ticket.view');
    Route::post('user-reply-ticket', ['uses'=>'UserManageController@userticketreply', 'middleware'=>'message'])->name('ticket.reply');
    Route::post('/sendnotify', ['uses'=>'UserManageController@notifystore', 'middleware'=>'message'])->name('send.notification');
    Route::post('/job', ['uses'=>'UserManageController@storeJob', 'middleware'=>'createuser'])->name('send.job');

    //Staff Management
    Route::get('create-admin', ['uses'=>'AdminController@createadmin', 'middleware'=>'createuser'])->name('createadmin');
    Route::post('create-admin', ['uses'=>'AdminController@createadminpost', 'middleware'=>'createuser'])->name('createnewadmin');

    Route::get('create-cbt', ['uses'=>'AdminController@createCbt', 'middleware'=>'createuser'])->name('createCbt');
    Route::post('create-cbt', ['uses'=>'AdminController@createCbtPost', 'middleware'=>'createuser'])->name('createnewCbt');


    //User Management
    Route::get('users', ['uses'=>'UserManageController@users', 'middleware'=>'viewuser'])->name('users');
    Route::get('user-search', ['uses'=>'UserManageController@userSearch', 'middleware'=>'viewuser'])->name('search.users');
    Route::get('user/{user}', ['uses'=>'UserManageController@singleUser', 'middleware'=>'viewuser'])->name('user.single');
    Route::put('user/pass-change/{user}', ['uses'=>'UserManageController@userPasschange', 'middleware'=>'manageuser'])->name('user.passchange');
    Route::put('user/status/{user}', ['uses'=>'UserManageController@statupdate', 'middleware'=>'manageuser'])->name('user.status');
    Route::get('mail/{user}', ['uses'=>'UserManageController@userEmail', 'middleware'=>'manageuser'])->name('user.email');
    Route::post('/sendmail', ['uses'=>'UserManageController@sendemail', 'middleware'=>'manageuser'])->name('send.email');
    Route::get('/user-login-history/{id}', ['uses'=>'UserManageController@loginLogsByUsers', 'middleware'=>'viewuser'])->name('user.login.history');
    Route::get('/user-balance/{id}', ['uses'=>'UserManageController@ManageBalanceByUsers', 'middleware'=>'viewuser'])->name('user.balance');
    Route::post('/user-balance', ['uses'=>'UserManageController@saveBalanceByUsers', 'middleware'=>'manageuser'])->name('user.balance.update');
    Route::post('/user-walletbalance', ['uses'=>'UserManageController@savecoinwalletBalanceByUsers', 'middleware'=>'manageuser'])->name('user.coinbalance.update');
    Route::get('/user-banned', ['uses'=>'UserManageController@banusers', 'middleware'=>'viewuser'])->name('user.ban');
    Route::get('login-logs/{user?}', ['uses'=>'UserManageController@loginLogs', 'middleware'=>'viewuser'])->name('user.login-logs');
    Route::get('/user-transaction/{id}', ['uses'=>'UserManageController@userTrans', 'middleware'=>'viewuser'])->name('user.trans');
    Route::get('/user-deposit/{id}', ['uses'=>'UserManageController@userDeposit', 'middleware'=>'manageuser'])->name('user.deposit');
    Route::get('/user-block/{id}', ['uses'=>'UserManageController@block', 'middleware'=>'manageuser'])->name('user.block');
    Route::get('/user-activate/{id}', ['uses'=>'UserManageController@activate', 'middleware'=>'manageuser'])->name('user.activate');
    Route::get('/user-delete/{id}', ['uses'=>'UserManageController@delete', 'middleware'=>'manageuser'])->name('user.delete');
    Route::get('/user-withdraw/{id}', ['uses'=>'UserManageController@userWithdraw', 'middleware'=>'manageuser'])->name('user.withdraw');
    Route::get('/user-kyc', ['uses'=>'UserManageController@userkyc','middleware'=>'kyc'])->name('admin.kyc');
    Route::get('/view-kyc/{id}', ['uses'=>'UserManageController@viewkyc','middleware'=>'kyc'])->name('kycview');
    Route::get('/del-kyc/{id}', ['uses'=>'UserManageController@delkyc','middleware'=>'kyc'])->name('kycdelete');
    Route::get('/reject-kyc/{id}', ['uses'=>'UserManageController@rejectkyc','middleware'=>'kyc'])->name('kycreject');
    Route::get('/approve-kyc/{id}', ['uses'=>'UserManageController@approvekyc','middleware'=>'kyc'])->name('kycapprove');

    //Email & SMS Template
    Route::get('/sms-email', 'EtemplateController@index')->name('email.template');
    Route::post('/template-update', 'EtemplateController@update')->name('template.update');
 //Sms Api
    Route::get('/sms-api', 'EtemplateController@smsApi')->name('sms.api');
    Route::post('/sms-update', 'EtemplateController@smsUpdate')->name('sms.update');


    /*Menu Control*/
    Route::get('menu-create', 'WebSettingController@createMenu')->name('menu-create');
    Route::post('menu-create', 'WebSettingController@storeMenu')->name('menu-create');
    Route::get('menu-control', 'WebSettingController@manageMenu')->name('menu-control');
    Route::get('menu-edit/{id}', 'WebSettingController@editMenu')->name('menu-edit');
    Route::post('menu-update/{id}', 'WebSettingController@updateMenu')->name('menu-update');
    Route::delete('menu-delete', 'WebSettingController@deleteMenu')->name('menu-delete');

    /*Social Icon Control*/
    Route::get('manage-social','WebSettingController@manageSocial')->name('manage-social');
    Route::post('manage-social','WebSettingController@storeSocial')->name('manage-social');
    Route::get('manage-social/{product_id?}','WebSettingController@editSocial')->name('social-edit');
    Route::put('manage-social/{product_id?}', 'WebSettingController@updateSocial')->name('social-edit');
    Route::post('delete-social', 'WebSettingController@destroySocial')->name('del.social');

    /*Service Control*/
    Route::resource('service','ServiceController');

    /*Bank Control*/
    Route::get('system-banks', ['uses'=>'BankController@index', 'middleware'=>'settings'])->name('admin.bank');
    Route::get('delete-banks/{id}', ['uses'=>'BankController@delete', 'middleware'=>'settings'])->name('admin.bank.delete');
    Route::post('post-bank', ['uses'=>'BankController@update', 'middleware'=>'settings'])->name('post.bank');
    Route::post('create-bank', ['uses'=>'BankController@create', 'middleware'=>'settings'])->name('create.bank');

    // Web Settings
    Route::get('manage-logo', 'WebSettingController@manageLogo')->name('manage-logo');
    Route::post('manage-logo', 'WebSettingController@updateLogo')->name('manage-logo');

    Route::get('manage-text', 'WebSettingController@manageFooter')->name('manage-footer');
    Route::put('manage-text', 'WebSettingController@updateFooter')->name('manage-footer-update');

    Route::get('manage-breadcrumb', 'WebSettingController@manageBreadcrumb')->name('manage-breadcrumb');
    Route::post('manage-breadcrumb', 'WebSettingController@updateBreadcrumb')->name('manage-breadcrumb');


    Route::get('terms', 'WebSettingController@terms')->name('terms');
    Route::get('tserms', 'WebSettingController@terms')->name('banks.index');
    Route::get('privacy', 'WebSettingController@privacy')->name('privacy');
    Route::post('terms', 'WebSettingController@updateTerms')->name('update.terms');


    Route::get('/about', ['uses'=>'WebSettingController@getAbout', 'middleware'=>'frontend'])->name('admin.about');
    Route::post('/about', ['uses'=>'WebSettingController@updateAbout', 'middleware'=>'frontend'])->name('admin.about');
    Route::get('/header', ['uses'=>'WebSettingController@getheader', 'middleware'=>'frontend'])->name('admin.header');
    Route::post('/header', ['uses'=>'WebSettingController@updateheader', 'middleware'=>'frontend'])->name('admin.header');
    Route::get('/vmg', ['uses'=>'WebSettingController@getvmg', 'middleware'=>'frontend'])->name('admin.vmg');
    Route::post('/vmg', ['uses'=>'WebSettingController@updatevmg', 'middleware'=>'frontend'])->name('admin.vmg');
    Route::get('/policy', ['uses'=>'WebSettingController@getpolicy', 'middleware'=>'frontend'])->name('admin.privacy');
    Route::post('/policy', ['uses'=>'WebSettingController@updatepolicy', 'middleware'=>'frontend'])->name('admin.privacy');
    Route::get('/how', ['uses'=>'WebSettingController@gethow', 'middleware'=>'frontend'])->name('admin.hows');
    Route::post('/how', ['uses'=>'WebSettingController@updatehow', 'middleware'=>'frontend'])->name('admin.how');
    Route::post('/testimonial-text', 'WebSettingController@testimonialText')->name('testimonial.text');




    Route::get('/logout', 'AdminController@logout')->name('admin.logout');
});


/*============== User Password Reset Route list ===========================*/
Route::get('user-password/reset', 'User\ForgotPasswordController@showLinkRequestForm')->name('user.password.request');
Route::post('user-password/email', 'User\ForgotPasswordController@sendResetLinkEmail')->name('user.password.email');
Route::get('user-password/reset/{token}', 'User\ResetPasswordController@showResetForm')->name('user.password.reset');
Route::post('user-password/reset', 'User\ResetPasswordController@reset');

