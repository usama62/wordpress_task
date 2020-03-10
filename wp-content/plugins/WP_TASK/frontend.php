<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>USERNAME</th>
        <th>EMAIL</th>
        <th>View Details</th>
    </tr>
    </thead>
    <tbody id="tableBody">
        
    </tbody>
</table>
<div id="data"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

    $(document).ready(function(){
        $.ajax({
            url: 'https://jsonplaceholder.typicode.com/users',
            method: 'GET',
            data: {
            
            },
            success: function(result){  
                console.log(result)
                $('#tableBody').empty();
                $(result).each(function(i,v){
                    $('#tableBody').append(`
                    <tr>
                        <td>${v['id']}</td>
                        <td>${v['name']}</td>
                        <td>${v['username']}</td>
                        <td>${v['email']}</td>
                        <td id="action"><button class="action-btn" id="${v['id']}">View</button></td>
                    </tr>
                    `);
                })
            }
        })
    });

    $(document).ready(function(){
        $(document).on("click",".action-btn",function(){
            id = $(this).attr('id')

            $.ajax({
                url: 'https://jsonplaceholder.typicode.com/posts/'+id,
                method: 'GET',
                data: {
                
                },
                success: function(result){  
                    $('#data').empty();
                    $(result).each(function(i,v){
                        $('#data').append(`
                        <div>${v['title']}</div>
                        <br>
                        <div>${v['body']}</div>
                        `);
                    })
                    $('html, body').animate({
                        scrollTop: $("#data").offset().top
                    }, 500);
                }
            })
        })
    });
    
</script>
