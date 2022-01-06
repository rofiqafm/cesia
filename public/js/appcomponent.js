let apps=()=>{
    $(document).ready(function() {
        Number.prototype.format = function(n, x, s, c) {
            var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
                num = this.toFixed(Math.max(0, ~~n));
            return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
        };
        $.fn.hasExtension = function(exts) {
            return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test($(this).val());
        };
        $('.wrapper .select').select2();
        $.fn.appendData = function(uri,data,def,async_status=true) {
            let e=$(this),
                newOption = (def)?[new Option(def.obj, def.key, false, false)]:[];
            e.closest(".input-group").addClass("selectappend");
            $.ajax({
                type: "get",
                url: uri,
                data: data,
                async: async_status,
                dataType: "json",
                success: function(response) {
                    $.map(response, function(obj, key) {
                        newOption.push(new Option(obj, key, false, false));
                    });
                    e.html(newOption).trigger('change.select2');
                    e.closest(".selectappend").removeClass("selectappend");
                }
            });
        }
        $(document).on("keypress", ".numeric", function (evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if(!(charCode>47&&charCode<58)){
                evt.preventDefault();
            };
        });
        $("input.numericMask").maskMoney({
            precision: 0,
            allowZero: true,
            affixesStay: false,
            thousands: '.',
            decimal: ','
        });
        $(document).on('select2:open', () => {
            document.querySelector('.select2-search__field').focus();
        });
        $('#daterangepicker').daterangepicker();
    });
}

apps();