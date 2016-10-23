(function($) {
    'use strict';
    //if special character radio button is selected
    var isSelectedSC = false;
    //if uppercase radio button is selected
    var isSelectedCaps = false;

    //Document ready
    $(function() {
        var localeValue = $('#localeValue');
        var paymentInfo = $('#paymentInfo');

        $('#locale').change(function() {
            isSelectedSC = changeVisibility(isSelectedSC, localeValue);
        });

        $('#payment').change(function() {
            isSelectedCaps = changeVisibility(isSelectedCaps, paymentInfo);
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
