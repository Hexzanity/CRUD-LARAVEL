<script>
        document.addEventListener("DOMContentLoaded", function() {
            var productData = {!! json_encode($productData) !!};
            var earningsData = {!! json_encode($earningsData) !!};
            var salesData = {!! json_encode($salesData) !!};


            var productNames = productData.map(function(product) {
                return product.name;
            });

            var earnings = earningsData.map(function(earnings) {
                var product = productData.find(function(product) {
                    return product.id === earnings.product_id;
                });

                return product.price * earnings.total_quantity;
            });


            var dates = salesData.map(function(sale) {
                return sale.date;
            });

            var totalSales = salesData.map(function(sale) {
                return sale.total_sales;
            });


            var earningsColors = [];
            for (var i = 0; i < productData.length; i++) {
                var randomColor = '#' + Math.floor(Math.random() * 16777215).toString(16);
                earningsColors.push(randomColor);
            }

            // Create the earnings chart
            var earningsCtx = document.getElementById('earningsChart').getContext('2d');
            new Chart(earningsCtx, {
                type: 'bar',
                data: {
                    labels: productNames,
                    datasets: [{
                        data: earnings,
                        backgroundColor: earningsColors,
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value, index, values) {
                                    return '₱' + value;
                                }
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });

            // Create the sales chart
            var salesCtx = document.getElementById('salesChart').getContext('2d');
            new Chart(salesCtx, {
                type: 'line',
                data: {
                    labels: dates,
                    datasets: [{
                        label: 'Total Sales',
                        data: totalSales,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderWidth: 1,
                        fill: true
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value, index, values) {
                                    return '₱' + value;
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>
