<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex">
        <aside class="w-1/4 bg-white p-4">
            <h2 class="text-lg font-bold">لوحة التحكم</h2>
            <ul>
                <li><a href="/dashboard" class="block p-2 hover:bg-gray-200">الصفحة الرئيسية</a></li>
                <li><a href="/products" class="block p-2 hover:bg-gray-200">المنتجات</a></li>
                <li><a href="/orders" class="block p-2 hover:bg-gray-200">الطلبات</a></li>
                <li><a href="/users" class="block p-2 hover:bg-gray-200">المستخدمون</a></li>
            </ul>
        </aside>
        <main class="flex-1 p-4">
            <h1 class="text-2xl font-bold">مرحبا بعودتك، {{ auth()->user()->name }}</h1>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="font-bold">إجمالي المبيعات</h2>
                    <p>1000 دولار</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="font-bold">عدد الطلبات</h2>
                    <p>50 طلب</p>
                </div>
            </div>
            <!-- إضافة رسم بياني باستخدام Chart.js -->
            <canvas id="salesChart"></canvas>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو'],
                datasets: [{
                    label: 'المبيعات',
                    data: [1200, 1900, 3000, 5000, 2000],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
