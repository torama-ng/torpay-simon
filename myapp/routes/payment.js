var express = require('express');
var router = express.Router();
const Cryptr  = require('cryptr');
const bodyParser =require('body-parser');
const cryptr = new Cryptr('myTotalSecretKey');
const userMosel = require('../models/users_model');
let wepay = require('wepay');
const crypto = require('crypto');
const sha512 = require('js-sha512').sha512;
const historyModel = require('../models/history_models');
const users_model = require('../models/users_model');
let random = require('random-number');
const keys = require('../models/keys');

/* GET users listing. */
router.get('/', function(req, res, next) {
res.render('pay',{user : req.session.user.fullname});


});


router.post('/', function(req, res){

    // generate random for trax id.
    let gen = random.generator({
        min : - 10000000,
        max : 10000000000000,
        integer : true
    });
    let gen_id = gen();
  
    // get value from user 
  let customerName = req.body.customer_name;
  let amount = req.body.amount;
  let memo = req.body.trax_memo;
  let cust_trax_id = gen_id;
  let cust_id = req.session.user._id;
  console.log(cust_id);

  console.log(customerName);
  console.log(amount);
  console.log(memo);

  new historyModel({
          amount : amount,
          trax_id : cust_trax_id,
          memo : memo,
          customer_id : cust_id,
          name : customerName
      
     
  }).save().then( function(new_history){
    //   console.log(new_history);
  });

  // get current user id
  let my_id = req.session.user._id;

// value to be submitted to gtpay
const gtpay_mert_id = keys.gtpay_mert_id;
const gtpay_tranx_id = cust_trax_id ;
const gtpay_tranx_amt = amount;
const  gtpay_tranx_curr = keys.gtpay_tranx_curr;
const gtpay_cust_id = my_id ;
// const gtpay_no_show_gtbank ="yes" ;
const gtpay_echo_data =keys.gtpay_echo_data ;
const gtpay_gway_name ="" ;
let gtpay_tranx_noti_url = keys.gtpay_tranx_noti_url;


// my hashkey
let hash_key = keys.hash_key;
let gtpay_trim= hash_key.trim(); 

//$hashed = $gtpay_mert_id.$gtpay_tranx_id.$gtpay_tranx_amt.$gtpay_tranx_curr.$gtpay_cust_id.$hashkey;
let all_values =  gtpay_mert_id+gtpay_tranx_id+gtpay_tranx_amt+gtpay_tranx_curr+gtpay_cust_id+gtpay_tranx_noti_url+gtpay_trim;

   // geenerate hash key
    function SHA256Encrypt() {
        var sha512 = crypto.createHash('sha512');
        sha512.update(all_values).digest("hex");
        return sha512;
    }

let new_hash = SHA256Encrypt();
        console.log('hash function '+ new_hash);
      
// render value ahead 
   res.render('payment_status', {
       user : req.session.user.fullname,
       customerName :customerName,
       amount : gtpay_tranx_amt,
       memo : memo,
       gtpay_tranx_curr : gtpay_tranx_curr,
       gtpay_cust_id : gtpay_cust_id,
       gtpay_hash :  new_hash,
       trax_id : gtpay_tranx_id,
       gtpay_echo_data : gtpay_echo_data,
       gtpay_gway_name : gtpay_gway_name,
       gtpay_mert_id : gtpay_mert_id,
       gtpay_tranx_noti_url : gtpay_tranx_noti_url,

   });
})

module.exports = router;