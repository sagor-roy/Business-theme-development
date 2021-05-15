
<script type="text/javascript">
    // CSRF TOKEN
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // CSRF TOKEN END

    //CHOOSE
    $(function() {
        var url = '{{ url('admin/choose') }}';
        $('.choose').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            $.ajax({
                type: "post",
                dataType: "json",
                url: url,
                data: {'status': status},
                success: function(data){
                    console.log(data.success)
                }
            });
        })
    })

    //OFFER
    $(function() {
        var url = '{{ url('admin/offer') }}';
        $('.offer').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            $.ajax({
                type: "post",
                dataType: "json",
                url: url,
                data: {'status': status},
                success: function(data){
                    console.log(data.success)
                }
            });
        })
    })

    //PRODUCT
    $(function() {
        var url = '{{ url('admin/product') }}';
        $('.product').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            $.ajax({
                type: "post",
                dataType: "json",
                url: url,
                data: {'status': status},
                success: function(data){
                    console.log(data.success)
                }
            });
        })
    })

    //STAFF
    $(function() {
        var url = '{{ url('admin/staff') }}';
        $('.staff').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            $.ajax({
                type: "post",
                dataType: "json",
                url: url,
                data: {'status': status},
                success: function(data){
                    console.log(data.success)
                }
            });
        })
    })

    //WORK
    $(function() {
        var url = '{{ url('admin/work') }}';
        $('.work').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            $.ajax({
                type: "post",
                dataType: "json",
                url: url,
                data: {'status': status},
                success: function(data){
                    console.log(data.success)
                }
            });
        })
    })

    //CLIENT
    $(function() {
        var url = '{{ url('admin/client') }}';
        $('.client').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            $.ajax({
                type: "post",
                dataType: "json",
                url: url,
                data: {'status': status},
                success: function(data){
                    console.log(data.success)
                }
            });
        })
    })

    //CENTER IMG
    $(function() {
        var url = '{{ url('admin/center-img') }}';
        $('.center_img').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            $.ajax({
                type: "post",
                dataType: "json",
                url: url,
                data: {'status': status},
                success: function(data){
                    console.log(data.success)
                }
            });
        })
    })

    //FEEDBACK
    $(function() {
        var url = '{{ url('admin/feedback') }}';
        $('.feedback').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            $.ajax({
                type: "post",
                dataType: "json",
                url: url,
                data: {'status': status},
                success: function(data){
                    console.log(data.success)
                }
            });
        })
    })

    //PARTNER
    $(function() {
        var url = '{{ url('admin/partner') }}';
        $('.partner').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            $.ajax({
                type: "post",
                dataType: "json",
                url: url,
                data: {'status': status},
                success: function(data){
                    console.log(data.success)
                }
            });
        })
    })

    //BLOG
    $(function() {
        var url = '{{ url('admin/blog-section') }}';
        $('.blog').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            $.ajax({
                type: "post",
                dataType: "json",
                url: url,
                data: {'status': status},
                success: function(data){
                    console.log(data.success)
                }
            });
        })
    })

    //CLICK
    $(function() {
        var url = '{{ url('admin/click') }}';
        $('.click').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            $.ajax({
                type: "post",
                dataType: "json",
                url: url,
                data: {'status': status},
                success: function(data){
                    console.log(data.success)
                }
            });
        })
    })
</script>
