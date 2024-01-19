
<script src="{{asset('home/js/script.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



<script>
    var currentPage = {{ $gamesPaginated->currentPage() }};
    var lastPage = {{ $gamesPaginated->lastPage() }};
    var isFetching = false;

    $(document).ready(function() {
        $(window).on('scroll', function() {
            if ($(window).scrollTop() + $(window).height() >= $(document).height() - 200 && !isFetching) {
                checkAndLoadMore();
            }
        });
    });

    function checkAndLoadMore() {
        if (currentPage < lastPage && !isFetching) {
            currentPage++;
            loadMoreGames(currentPage);
        }
    }

    function loadMoreGames(page) {
        isFetching = true;
        $.ajax({
            url: "{{ url()->current() }}?page=" + page,
            type: "GET",
            dataType: "html",
            success: function(data) {
                if (data.trim() !== "") {
                    $("#games-container").append(data);
                }
                isFetching = false;

                // Check if all items have been loaded
                if (currentPage >= lastPage) {
                    $(window).off('scroll');  // Disable scrolling when all items are loaded
                }
            },
            error: function() {
                isFetching = false;
            }
        });
    }
</script>