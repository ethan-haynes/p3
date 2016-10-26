(function($) {
    'use strict';
    //if special character radio button is selected
    var isSelectedLocale = false;
    //if uppercase radio button is selected
    var isSelectedPayment = false;

    //Document ready
    $(function() {
        var localeValue = $('#localeValue');
        var paymentInfo = $('#paymentInfo');

        $('#locale').change(function() {
            isSelectedLocale = changeVisibility(isSelectedLocale, localeValue);
        });

        $('#payment').change(function() {
            isSelectedPayment = changeVisibility(isSelectedPayment, paymentInfo);
        });

        //changes the visibility of the form fields depending on selection of "parent"
        var changeVisibility = function(boolean, id) {
            boolean = !boolean;
            if (boolean)
                id.css('visibility', 'visible');
            else
                id.css('visibility', 'hidden');
            return boolean;
        };
    });
})(jQuery);
