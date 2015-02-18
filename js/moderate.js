$(document).ready(function() {
        gfyCollection.init();

        $('.approve-link').on('click', function(event) {
          // Prevent Default Behavior
          event.preventDefault();
          var r = confirm('Are you sure you want to accept this submission?');
          if (r == false) {
              return;
          }
          var ref_this = $("ul.nav-tabs li.active a");
          var key = ref_this.data("id");
          var $approveLink = $(this);
          var submitNum = "key=" + key;
          submitNum += "&id=";
          submitNum += $approveLink.closest('.submission').attr('data-id');
          console.log(submitNum);

          $.ajax({
            url: '/techs/submitAdd.php',
            type: 'POST',
            data: submitNum
          })
          .success(function(html) {
            $approveLink.closest('.submission').remove();
            console.log(html);
          })
          .fail(function() {
            console.log('failing');
          })
          .always(function(html) {

            //console.log('always');
          });
        });

        $('.delete-link').on('click', function(event) {

          var r = confirm('Are you sure you want to delete this submission?');
          if (r == false) {
              return;
          }

          // Prevent Default Behavior
          event.preventDefault();

          var $deleteLink = $(this);
          var ref_this = $("ul.nav-tabs li.active a");
          var key = ref_this.data("id");
          var submitNum = "key=" + key;
          submitNum += "&id=";
          submitNum += $deleteLink.closest('.submission').attr('data-id');
          console.log(submitNum);
          $.ajax({
            url: '/techs/submitDelete.php',
            type: 'POST',
            data: submitNum
          })
          .success(function(html) {
            $deleteLink.closest('.submission').remove();
            console.log(html);
          })
          .fail(function() {
            console.log('failing');
          })
          .always(function(html) {
            console.log('always');
          });
        });
      });