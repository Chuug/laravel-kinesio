$(function() {
   let datepicker = $('.date-pick').datepicker({
      format: 'dd/mm/yyyy',
      startDate: '0d'
   });
   let kine = getKine();

   $('.form-check-input').click(() => {
     kine = getKine();
   });

   let date;
   let url;
   datepicker.change(() => {
      refreshHour();
   });

   $('.form-check-input').change(() => {
      refreshHour();
   })

   function refreshHour() {
      date = datepicker.val();
      url = '/api/get-app/' + date + "/" + kine;
      $.ajax({
         url: url
      }).done((res) => {
         $('.select-hour').each((i, obj) => {
            let val = $(obj).attr('value');
            let text = $(obj).html().split('|');
            if(res.includes(val)) {
               $(obj).html($(obj).html() + ' | Réservé').attr('disabled','disabled');
            } else {
               $(obj).html(text[0]).removeAttr('disabled','disabled');
            }
         });
      });
   }


   function getKine() {
      return $('.form-check-input:checked').attr('id');
   }
});