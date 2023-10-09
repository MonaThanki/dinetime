(function payment() {
  var d = document,
    body = d.getElementsByTagName('body')[0],
    html = d.getElementsByTagName('html')[0],
    ppForm = d.getElementsByTagName('form')[0],
    ccForm = d.getElementsByTagName('form')[1],
    ecForm = d.getElementsByTagName('form')[2],
    cCard = d.querySelector('#cc-card'),
    pCard = d.querySelector('#pp-card'),
    eCard = d.querySelector('#ec-card'),
    submit = d.querySelector('#submit'),
    cardNumberDetail = d.getElementById('#cardnumber');
  info = d.querySelector('#choosen-paymenttype'),
    ccNumber = ccForm.querySelector('#cardnumber'),
    cNumber = d.querySelectorAll('.card-number'),
    ccName = ccForm.querySelector('#cardholder'),
    cName = d.querySelectorAll('.card-holder'),
    ccMonth = ccForm.querySelector('#expires-month'),
    cMonth = d.querySelectorAll('.e-month'),
    ccYear = ccForm.querySelector('#expires-year'),
    cYear = d.querySelectorAll('.e-year'),
    ccCCV = ccForm.querySelector('#ccv'),
    cCCV = d.querySelector('.ccv strong'),
    ccCard = d.querySelectorAll('.credit-card-type'),
    defaultNumber = cNumber[0].getElementsByTagName('span')[0].innerHTML,
    defaultName = cName[0].getElementsByTagName('span')[0].innerHTML;
  isValid = true;

  init();

  function init() {
    var cardType, cardNumber, cardName, cardCCV;
    body.className = 'cc-bg';

    // To switch cards on click
    function switchPos(elm) {
      if (elm.classList.contains('selected')) {
        if (elm.getElementsByTagName('input').length) {
          elm.getElementsByTagName('input')[0].focus();
        }
        return;
      }
      var selected = d.querySelector('.selected');

      // for left switch
      if (elm.classList.contains('unselected-left')) {
        selected.classList.remove('selected');
        selected.classList.add('unselected-left');
        elm.classList.add('selected');
        elm.classList.remove('unselected-left');
        if (window.matchMedia("(max-width: 1039px)").matches) {
          setTimeout(function () { elm.scrollIntoView(); }, 500);
        }

        // for right switch
      } else if (elm.classList.contains('unselected-right')) {
        selected.classList.remove('selected');
        selected.classList.add('unselected-right');
        elm.classList.add('selected');
        elm.classList.remove('unselected-right');
        if (window.matchMedia("(max-width: 1039px)").matches) {
          setTimeout(function () { elm.scrollIntoView(); }, 500);
        }
      }
    }

    //To add method name in header for paypal
    addEvent(pCard, 'click', function () {
      switchPos(d.querySelector('.paymenttype.pp'));
      body.className = 'pp-bg';
      info.innerHTML = 'PayPal';
    });

    //To add method name in header for credit card
    addEvent(cCard, 'click', function () {
      switchPos(d.querySelector('.paymenttype.cc'));
      body.className = 'cc-bg';
      info.innerHTML = 'Credit Card';
    });

    //To add method name in header for american express membership
    addEvent(eCard, 'click', function () {
      switchPos(d.querySelector('.paymenttype.ec'));
      body.className = 'ec-bg';
      info.innerHTML = 'American Express Membership';
    });

    //to validate credit card details
    addEvent(submit, 'click', function () {
      $('form').submit(function (e) {
        // To display back to require sign after error get displayed
        $("#cardnumber").next().text("");
        $("#cardholder").next().text("");
        $("#expires-month").next().text("");
        $("#expires-year").next().text("");
        $("#ccv").next().text("");

        // condition for card number
        if (ccNumber.value == "") {
          $("#cardnumber").next().text("Please Enter Valid Card Number.");
          e.preventDefault();
          isValid = false;
        }

        // condition for card holder name
        if (ccName.value == "") {
          $("#cardholder").next().text("Please Enter Valid Name.");
          e.preventDefault();
          isValid = false;
        }

        // condition for card expiry month
        if (ccMonth.value == "") {
          $("#expires-month").next().text("Please Enter Valid Expiry Month.");
          e.preventDefault();
          isValid = false;
        }

        // condition for card expiry year
        if (ccYear.value == "") {
          $("#expires-year").next().text("Please Enter Valid Expiry Year.");
          e.preventDefault();
          isValid = false;
        }

        // condition for card security code
        if (ccCCV.value == "") {
          $("#ccv").next().text("Please Enter Valid Card CVV Number.");
          e.preventDefault();
          isValid = false;
        }
      });
      return isValid;
    });

    // to add, remove and flip card details in display section
    addEvent(ccNumber, 'focus', function () {
      cNumber[0].classList.add('glow');
    });
    addEvent(ccNumber, 'blur', function () {
      cNumber[0].classList.remove('glow');
    });

    addEvent(ccName, 'focus', function () {
      cName[0].classList.add('glow');
    });
    addEvent(ccName, 'blur', function () {
      cName[0].classList.remove('glow');
    });

    addEvent(ccMonth, 'focus', function () {
      cMonth[0].classList.add('glow');
    });
    addEvent(ccMonth, 'blur', function () {
      cMonth[0].classList.remove('glow');
    });

    addEvent(ccYear, 'focus', function () {
      cYear[0].classList.add('glow');
    });
    addEvent(ccYear, 'blur', function () {
      cYear[0].classList.remove('glow');
    });

    addEvent(ccCCV, 'focus', function () {
      cCard.classList.add('flipped');
    });
    addEvent(ccCCV, 'blur', function () {
      cCard.classList.remove('flipped');
    });


    // To add and validate card number details
    addEvent(ccNumber, 'keyup', function () {
      cardNumber = this.value.replace(/[^0-9\s]/g, '');
      if (!!this.value.match(/[^0-9\s]/g)) {
        this.value = cardNumber;
      }
      cardType = getCardType(cardNumber.replace(/\s/g, ''));
      switch (cardType) {
        case 'amex':
          parts = numSplit(cardNumber.replace(/\s/g, ''), [4, 6, 5]);
          ccCard[0].className = 'credit-card-type amex';
          break;
        case 'mastercard':
          parts = numSplit(cardNumber.replace(/\s/g, ''), [4, 4, 4, 4]);
          ccCard[0].className = 'credit-card-type mastercard';
          break;
        case 'visa':
          parts = numSplit(cardNumber.replace(/\s/g, ''), [4, 4, 4, 4]);
          ccCard[0].className = 'credit-card-type visa';
          break;
        default:
          parts = cardNumber.split(' ');
          ccCard[0].className = 'credit-card-type';
      }
      cardNumber = parts.join(' ');
      if (cardNumber != this.value) {
        this.value = cardNumber;
      }
      if (!cardNumber) {
        cardNumber = defaultNumber;
      }
      syncText(cNumber, cardNumber);
    });

    // to write card holder name in upper section
    addEvent(ccName, 'keyup', function () {
      cardName = this.value.replace(/[^a-zA-Z-\.\s]/g, '');
      if (cardName != this.value) {
        this.value = cardName;
      }
      if (!cardName) {
        cardName = defaultName;
      }
      syncText(cName, cardName);
    });

     // to write card expiry date in upper section
    addEvent(ccMonth, 'keyup', function (ev) {
      ev = ev || window.event;
      var month = this.value.replace(/[^0-9]/g, '');
      if (ev.keyCode == 38) {
        if (!month) { month = 0; }
        month = parseInt(month);
        month++;
        if (month < 10) {
          month = '0' + month;
        }
      }
      if (ev.keyCode == 40) {
        if (!month) { month = 13; }
        month = parseInt(month);
        month--;
        if (month == 0) { month = 1; }
        if (month < 10) {
          month = '0' + month;
        }

      }
      if (parseInt(month) > 12) {
        month = 12;
      }
      if (parseInt(month) < 1 && month != 0) {
        month = '01';
      }
      if (month == '00') {
        month = '01';
      }

      if (month != this.value) {
        this.value = month;
      }
      if (month.toString().length == 2) {
        syncText(cMonth, month);
      }
    });

     // to write card expiry year validation in upper section
    addEvent(ccYear, 'keyup', function (ev) {
      ev = ev || window.event;
      var currentYear = new Date().getFullYear().toString().substr(2, 2),
        year = this.value.replace(/[^0-9]/g, '');

      if (ev.keyCode == 38) {
        if (!year) { year = currentYear; }
        year = parseInt(year);
        year++;
        if (year < 10) {
          year = '0' + year;
        }
      }
      if (ev.keyCode == 40) {
        if (!year) { year = parseInt(currentYear) + 5; }
        year = parseInt(year);
        year--;
        if (year < 10) {
          year = '0' + year;
        }
      }

      if (year.toString().length == 2 && parseInt(year) < currentYear) {
        year = currentYear;
      }
      if (year != this.value) {
        this.value = year;
      }
      if (year > (parseInt(currentYear) + 5)) {
        year = (parseInt(currentYear) + 5);
        this.value = year;
      }


      if (year.toString().length == 2) {
        syncText(cYear, year);
      }
    });

    // to write card security code and validation
    addEvent(ccCCV, 'keyup', function () {
      cardCCV = this.value.replace(/[^0-9\s]/g, '');
      if (cardCCV != this.value) {
        this.value = cardCCV;
      }
      cCCV.innerHTML = cardCCV;
    });
  }

  function syncText(elCol, text) {
    var collection;
    for (var j = 0; j < elCol.length; j++) {
      collection = elCol[j].querySelectorAll('span');
      if (!collection.length) {
        elCol[j].innerHTML = text;
      } else {
        for (var i = 0; i < collection.length; i++) {
          collection[i].innerHTML = text;
        }
      }
    }
  }

  function numSplit(number, indexes) {
    var tempArr = number.split(''),
      parts = [];
    for (var i = 0, l = indexes.length; i < l; i++) {
      if (tempArr.length) {
        parts.push(tempArr.splice(0, indexes[i]).join(''));
      }
    }
    return parts;
  }

  // To display card type
  function getCardType(number) {
    var re;
    // Mastercard
    re = new RegExp("^5[1-5]");
    if (number.match(re) != null) {
      return "mastercard";
    }
    // AMEX
    re = new RegExp("^3[47]");
    if (number.match(re) != null) {
      return "amex";
    }

    // visa
    var re = new RegExp("^4");
    if (number.match(re) != null) {
      return "visa";
    }

    return "";
  }

  function addEvent(elem, event, func) {
    elem.addEventListener(event, func);
  }

})();
