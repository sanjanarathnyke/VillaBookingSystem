document.addEventListener('DOMContentLoaded', function() {
    let totalPriceInput = document.getElementById('total_price_input');
    let basePrice = parseFloat(totalPriceInput.getAttribute('data-base-price'));

    document.getElementById('extra_guests').addEventListener('change', function() {
        let extraGuests = parseInt(this.value);

        if (isNaN(extraGuests)) extraGuests = 0; // Prevent NaN errors

        let totalPrice = basePrice + (extraGuests * 20);

        document.getElementById('totalPrice').textContent = '$' + totalPrice.toFixed(2);
        totalPriceInput.value = totalPrice;

    });
    let successToastElement = document.getElementById('successToast');
    if (successToastElement) {
        let successToast = new bootstrap.Toast(successToastElement);
        successToast.show();
    }
});
