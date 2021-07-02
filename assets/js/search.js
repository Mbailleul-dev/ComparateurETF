$.ajax({
    url: 'http://api.marketstack.com/v1/tickers/aapl/eod',
    data: {
        access_key: '1264cdd4f7dcfa790d7b2f226608330b'
    },
    dataType: 'json',
    success: function(apiResponse) {
        //console.log(apiResponse.data.eod);
        /* if (Array.isArray(apiResponse['data'])) {
             apiResponse['data'].forEach(stockData => {
                 console.log(`Ticker ${stockData['symbol']},
                                             has a day high of $ { stockData['high'] },

                                             on $ { stockData['date'] }
                                             `);
             });
         }*/

        let array = apiResponse.data.eod;
        array.forEach(element => document.getElementById('api').innerHTML += "<tr>" + element.close + "</tr><br>");


    }
});