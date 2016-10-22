(function($) {
    'use strict';
    //if special character radio button is selected
    var isSelectedSC = false;
    //if uppercase radio button is selected
    var isSelectedCaps = false;

    //Document ready
    $(function() {
        var numSC = $('#numSC');
        var caps = $('#caps');

        $('#locale').change(function() {
            isSelectedSC = changeVisibility(isSelectedSC, numSC);
        });

        $('#uppercase').change(function() {
            isSelectedCaps = changeVisibility(isSelectedCaps, caps);
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
