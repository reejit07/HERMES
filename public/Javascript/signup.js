
        /* Creating a function called PosEnd
         in JavaScript to place the cursor 
         at the end */
        function PosEnd(end) {
            var len = end.value.length;
              
            // Mostly for Web Browsers
            if (end.setSelectionRange) {
                end.focus();
                end.setSelectionRange(len, len);
            } else if (end.createTextRange) {
                var t = end.createTextRange();
                t.collapse(true);
                t.moveEnd('character', len);
                t.moveStart('character', len);
                t.select();
            }
        }
   