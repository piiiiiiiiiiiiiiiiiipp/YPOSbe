//Donation code on tha main landing page


const amountElement = document.getElementById("amountInput");

paypal.Buttons({
    style: {
        color: "white",
        shape: "pill"
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: amountElement.value,
                }
            }]
        });
    },

    // Call your server to finalize the transaction
    onApprove: function (data, actions) {

        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        return actions.order.capture().then(function (details) {
            if (details.status === 'COMPLETED') {
                return fetch('/captureOrder', {
                    method: 'post',
                    headers: {
                        'content-type': 'application/json',
                        "Accept": "application/json, text-plain, */*",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-TOKEN": token
                    },
                    body: JSON.stringify({
                        orderId: data.orderID,
                        date: details.create_time,
                        payerName: details.payer.name.given_name,
                        payerSurname: details.payer.name.surname,
                        payerEmail: details.payer.email_address,
                        status: details.status,
                        payerId: details.payer.payer_id,
                        paymentAmount: details.purchase_units[0].amount.value
                    })
                });
            } else {

                const element = document.getElementById('paypal-button-container');

                var errorDetail = Array.isArray(orderData.details) && orderData.details[0];

                if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED') {
                    return actions.restart();
                }

                if (errorDetail) {
                    var msg = 'Sorry, your transaction could not be processed.';
                    element.innerHTML = '<br>' +
                        '<div class="alert alert-danger d-flex align-items-center" role="alert">\n' +
                        '  <div>\n' +
                        msg +
                        '  </div>\n' +
                        '</div>';
                }
            }
        }).then(function(details) {
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '<br>' +
                '<div class="alert alert-success d-flex align-items-center" role="alert">\n' +
                '  <div>\n' +
                '   Thank you for your payment!' +
                '  </div>\n' +
                '</div>';
        });
    }

}).render('#paypal-button-container');

function status(res) {
    if (!res.ok) {
        throw new Error(res.statusText);
    }
    return res;
}

