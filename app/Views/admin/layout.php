<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title . ' - ' : '' ?>Admin Panel - Bharatpur Foundation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --admin-primary: #3498db;
            --admin-secondary: #2c3e50;
            --admin-success: #27ae60;
            --admin-danger: #e74c3c;
            --admin-warning: #f39c12;
            --admin-sidebar: #2c3e50;
            --admin-sidebar-hover: #34495e;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        .sidebar {
            min-height: 100vh;
            background: linear-gradient(180deg, var(--admin-sidebar), #34495e);
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .sidebar-header {
            padding: 1.5rem;
            background: rgba(0,0,0,0.1);
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .sidebar-header h4 {
            margin: 0;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu li {
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .sidebar-menu li a {
            display: block;
            padding: 1rem 1.5rem;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .sidebar-menu li a:hover,
        .sidebar-menu li a.active {
            background-color: var(--admin-sidebar-hover);
            color: white;
            border-left: 4px solid var(--admin-primary);
        }

        .sidebar-menu li a i {
            width: 20px;
            margin-right: 10px;
        }

        .main-content {
            margin-left: 250px;
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        .top-navbar {
            background: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-bottom: 1px solid #dee2e6;
        }

        .content-wrapper {
            padding: 2rem;
        }

        .stats-card {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-left: 4px solid var(--admin-primary);
            transition: transform 0.3s ease;
        }

        .stats-card:hover {
            transform: translateY(-2px);
        }

        .stats-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--admin-primary);
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .card-header {
            background: linear-gradient(135deg, var(--admin-primary), #2980b9);
            color: white;
            border-radius: 10px 10px 0 0 !important;
            border: none;
        }

        .btn-primary {
            background: var(--admin-primary);
            border-color: var(--admin-primary);
        }

        .btn-primary:hover {
            background: #2980b9;
            border-color: #2980b9;
        }

        .btn-success {
            background: var(--admin-success);
            border-color: var(--admin-success);
        }

        .btn-danger {
            background: var(--admin-danger);
            border-color: var(--admin-danger);
        }

        .table {
            background: white;
        }

        .table thead th {
            background: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
            font-weight: 600;
            color: var(--admin-secondary);
        }

        .badge {
            font-size: 0.75rem;
            padding: 0.5em 0.75em;
        }

        .alert {
            border: none;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .main-content {
                margin-left: 0;
            }

            .sidebar.show {
                transform: translateX(0);
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <nav class="sidebar">
        <div class="sidebar-header">
            <h4><i class="fas fa-tachometer-alt"></i> Admin Panel</h4>
            <small>Nayantar Memorial Trust</small>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="<?= base_url('admin') ?>" <?= (current_url() == base_url('admin')) ? 'class="active"' : '' ?>>
                    <i class="fas fa-home"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/beneficiaries') ?>" <?= (strpos(current_url(), 'beneficiaries') !== false) ? 'class="active"' : '' ?>>
                    <i class="fas fa-graduation-cap"></i> Beneficiaries
                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/success-stories') ?>" <?= (strpos(current_url(), 'success-stories') !== false) ? 'class="active"' : '' ?>>
                    <i class="fas fa-star"></i> Success Stories
                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/ngo-works') ?>" <?= (strpos(current_url(), 'ngo-works') !== false) ? 'class="active"' : '' ?>>
                    <i class="fas fa-heart"></i> NGO Works
                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/volunteering') ?>">
                    <i class="fas fa-heart"></i> Volunteering
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>" target="_blank">
                    <i class="fas fa-external-link-alt"></i> View Website
                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/logout') ?>">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Navbar -->
        <div class="top-navbar">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <button class="btn btn-link d-md-none" id="sidebarToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h5 class="mb-0"><?= isset($page_title) ? $page_title : 'Dashboard' ?></h5>
                </div>
                <div>
                    <span class="text-muted">Welcome, <?= session('admin_username') ?></span>
                    <a href="<?= base_url('admin/logout') ?>" class="btn btn-outline-danger btn-sm ms-2">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content-wrapper">
            <!-- Flash Messages -->
            <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show">
                <i class="fas fa-check-circle"></i> <?= session('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <?php endif; ?>

            <?php if(session('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <i class="fas fa-exclamation-circle"></i> <?= session('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <?php endif; ?>

            <?php if(session('validation')): ?>
            <div class="alert alert-warning alert-dismissible fade show">
                <i class="fas fa-exclamation-triangle"></i> Please fix the following errors:
                <ul class="mb-0 mt-2">
                    <?php foreach(session('validation') as $error): ?>
                    <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <?php endif; ?>

            <?= $this->renderSection('content') ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Sidebar toggle for mobile
        document.getElementById('sidebarToggle')?.addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('show');
        });

        // Auto-hide alerts after 5 seconds
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);
    </script>
</body>
</html>