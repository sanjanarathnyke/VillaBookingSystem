document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('extra_guests').addEventListener('change', function() {
        let extraGuests = parseInt(this.value);
        let basePrice = parseFloat(document.getElementById('total_price_input').getAttribute('data-base-price'));
        let totalPrice = basePrice + (extraGuests * 20);

        document.getElementById('totalPrice').textContent = '$' + totalPrice.toFixed(2);
        document.getElementById('total_price_input').value = totalPrice;
    });
});
