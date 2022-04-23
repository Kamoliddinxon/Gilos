<?php if (!empty($session['cart'])): ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Rasmi</th>
                <th>Nomi</th>
                <th>Donasi</th>
                <th>Summasi</th>
                <th>
                    <span class="glyphicon glyphicon-remove del-item text-dark h4" aria-hidden="true">×</span>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($session['cart'] as $id => $item): ?>
                <tr>
                    <td> <img src="/images/<?php echo $item['id']?>.jpg" height="50"></td>
                    <td><?php echo $item['name']?></td>
                    <td><?php echo $item['qty']?></td>
                    <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar mb-1" viewBox="0 0 16 16">
                            <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                        </svg><?php echo $item['price']?></td>
                    <td>
                        <span data-id="<?php echo $id; ?>" class="glyphicon glyphicon-remove del-item text-danger h4" aria-hidden="true">×</span>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4">Jami: </td>
                <td><strong><?= $session['cart.qty'] ?></strong> Dona</td>
            </tr>
            <tr>
                <td colspan="4">Jami summasi: </td>
                <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar mb-1" viewBox="0 0 16 16">
                        <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                    </svg><?= $session['cart.sum'] ?></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <h3 class="text-info">Savat bo'sh</h3>
<?php endif; ?>


<script>
    $('.del-item').on('click', function () {
        var id = $(this).data('id');
        $.ajax({
            url: '/site/del-item',
            data: {id: id},
            type: 'GET',
            success: function (res) {
                if (!res) alert('xatolik!');
                showCart(res);
            },
            error: function () {
                alert('Error!');
            }
        });
    })
</script>