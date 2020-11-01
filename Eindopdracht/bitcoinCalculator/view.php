<?php
//voeg hier een bestand toe.
?>
<?php include 'header.php'; ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <h4>Koop Crypto munten</h4>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="">Huidige Bitcoin Prijs</label>
                <span>&euro; </span><input type="text" name="bitcoin_current_price" value="<?php echo getBitcoinPrice() ?>" class="form-control">
                <small id="text" class="form-text text-muted">Laatste update: <?php echo getTime() ?> </small>
            </div>
            <a href="?euro=100" class="btn btn-info p-3 m-1">&euro;100</a>
            <a href="?euro=200" class="btn btn-info p-3 m-1">&euro;200</a>
            <a href="?euro=300" class="btn btn-info p-3 m-1">&euro;300</a>
            <a href="?euro=500" class="btn btn-info p-3 m-1">&euro;500</a>
            <a href="?euro=1000" class="btn btn-info p-3 m-1">&euro;1000</a>
            <a href="?euro=2000" class="btn btn-info p-3 m-1">&euro;2000</a>
        </div>
        <div class="col-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Prijs 1 Bitcoin (&euro;)</th>
                        <th>Koopbedrag (&euro;)</th>
                        <th>Aantal Bitcoin</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Deze tabel wordt dynamisch geladen met de $transactions array -->
                    <?php if (isset($transactions) && is_array($transactions)) : ?>
                        <?php $total_bitcoin_amount = 0; ?>
                        <?php foreach ($transactions as $key => $transaction) : ?>
                            <?php $total_bitcoin_amount += $transaction[2]; ?>
                            <tr>
                                <td><?php echo $key  ?></td>
                                <td><?php echo $transaction[0]; ?></td>
                                <td><?php echo $transaction[1]; ?></td>
                                <td><?php echo number_format($transaction[2], 4) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
                <tr>
                    <td colspan="4">Totaal gekochte bitcoins: <?php echo $total_bitcoin_amount ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<footer class="footer mt-auto py-3 m-5">
    <div class="row">
        <small id="text" class="form-text text-muted"><i><?php echo getDisclaimer() ?></i> </small>
    </div>
</footer>

<?php include 'footer.php'; ?>