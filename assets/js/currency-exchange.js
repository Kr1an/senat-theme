function xml2json(xml) {
  try {
          var obj = {};
          if (xml.children.length > 0) {
                  for (var i = 0; i < xml.children.length; i++) {
                          var item = xml.children.item(i);
                          var nodeName = item.nodeName;

                          if (typeof (obj[nodeName]) == "undefined") {
                                  obj[nodeName] = xml2json(item);
                          } else {
                          if (typeof (obj[nodeName].push) == "undefined") {
                                  var old = obj[nodeName];

                                  obj[nodeName] = [];
                                  obj[nodeName].push(old);
                          }
                          obj[nodeName].push(xml2json(item));
                          }
                  }
          } else {
                  obj = xml.textContent;
          }
          return obj;
  } catch (e) {
          console.log(e.message);
  }
}

(function() {
  const getCurrencyRates = (data) => {
          const result = xml2json(data);
          const currencies = result.rates.department.reduce((a, c, idx) => [...a, ...c.currency], []).filter(x => x.codeTo === 'BYN');
          const usdRate = currencies.find(x => x.code === 'USD');
          const eurRate = currencies.find(x => x.code === 'EUR');
          const rubRate = currencies.find(x => x.code === 'RUB');

          console.log(usdRate);
          console.log(eurRate);
          console.log(rubRate);

          $('#usd-buy').html(usdRate.purchase);
          $('#usd-sell').html(usdRate.sale);
          $('#eur-buy').html(eurRate.purchase);
          $('#eur-sell').html(eurRate.sale);
          $('#rub-buy').html(rubRate.purchase);
          $('#rub-sell').html(rubRate.sale);
          console.log(moment);
          $('#exchange-date').html(moment().format('DD.MM.YYYY'));
  };
  $.get('https://www.mtbank.by/currxml.php?ver=2', getCurrencyRates);
})()
