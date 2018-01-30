<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
$('#example').DataTable( {
    "createdRow": function ( row, data, index ) {
        if ( data[4].replace(/[\$,]/g, '') * 1 > 150000 ) {
            $('td', row).eq(4).addClass('highlight');
        }
    }
} );
} );
</script>
<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Puntuation</th>
                <th>Difficulty</th>
                <th>Estimated time</th>
                <th>Is it vegan?</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Puntuation</th>
                <th>Difficulty</th>
                <th>Estimated time</th>
                <th>Is it vegan?</th>
            </tr>
        </tfoot>
        <tbody>

            <tr>
                <td>Macarrones con tomatico</td>
                <td>10</td>
                <td>1</td>
                <td>0:25</td>
                <td>No</td>
            </tr>
            <tr>
                <td>Macarrones con nata</td>
                <td>10</td>
                <td>2</td>
                <td>0:35</td>
                <td>No</td>
            </tr><tr>
                <td>Macarrones con macarrones</td>
                <td>8</td>
                <td>10</td>
                <td>1:25</td>
                <td>Yes</td>
            </tr><tr>
                <td>Macarrones con la estrella de la muerte</td>
                <td>1</td>
                <td>10</td>
                <td>9:55</td>
                <td>Yes</td>
            </tr><tr>
                <td>Macarrones con queso de cabra</td>
                <td>7</td>
                <td>10</td>
                <td>9:25</td>
                <td>No</td>
            </tr><tr>
                <td>Macarrones con tostada quemada</td>
                <td>1</td>
                <td>1</td>
                <td>0:25</td>
                <td>Yes</td>
            </tr><tr>
                <td>Macarrones con el pesado de tu amigo</td>
                <td>1</td>
                <td>8</td>
                <td>0:25</td>
                <td>Yes</td>
            </tr><tr>
                <td>Macarrones con proteínas</td>
                <td>1</td>
                <td>1</td>
                <td>0:25</td>
                <td>No</td>
            </tr><tr>
                <td>Macarrones con fajos de 500</td>
                <td>1</td>
                <td>10</td>
                <td>3:20</td>
                <td>Yes</td>
            </tr><tr>
                <td>Macarrones que dan saltitos</td>
                <td>10</td>
                <td>10</td>
                <td>0:55</td>
                <td>No</td>
            </tr><tr>
                <td>Macarrones con un martillo</td>
                <td>1</td>
                <td>1</td>
                <td>0:25</td>
                <td>Yes</td>
            </tr>
        </tbody>
    </table>
