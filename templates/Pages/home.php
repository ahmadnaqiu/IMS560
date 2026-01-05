<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User|null $user
 */
$this->assign('title', 'Academic Portal');

// Check identity via Authentication plugin
$identity = $this->getRequest()->getAttribute('identity');
?>

<style>
    :root {
        --navy: #0a192f;
        --gold: #c9b037;
        --ivory: #f8f9fa;
        --white: #ffffff;
        --text-light: #e0e6ed;
        --text-medium: #a0aec0;
        --border-light: #2d3b55;
        --shadow: 0 10px 30px rgba(0,0,0,0.3);
    }

    body {
        background-color: var(--ivory);
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif;
        margin: 0;
    }

    /* NAVY DASHBOARD CARD */
    .dashboard-card {
        background: var(--navy);
        color: var(--text-light);
        max-width: 520px;
        width: 90%;
        margin: 80px auto 60px; /* Kept your layout margins */
        padding: 60px 50px;
        border-radius: 16px;
        box-shadow: var(--shadow);
        text-align: center;
        box-sizing: border-box;
    }

    .dashboard-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--white);
        margin-bottom: 10px;
    }

    .dashboard-subtitle {
        color: var(--text-medium);
        font-size: 1rem;
        margin-bottom: 40px;
        font-weight: 400;
    }

    /* CLOCK WIDGET */
    .clock-container {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid var(--border-light);
        border-radius: 12px;
        padding: 30px 20px;
        margin-bottom: 40px;
    }
    
    .time-text {
        font-size: 3rem;
        font-weight: 700;
        color: var(--white);
        font-variant-numeric: tabular-nums;
        line-height: 1;
        margin-bottom: 10px;
        letter-spacing: -1px;
    }
    
    .date-text {
        font-size: 0.95rem;
        color: var(--gold);
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* ACTION BUTTON */
    .action-btn {
        background-color: var(--gold);
        color: var(--navy);
        font-weight: 700;
        font-size: 1.1rem;
        letter-spacing: 0.5px;
        padding: 18px 0;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        width: 100%;
        display: block;
        text-decoration: none;
        transition: all 0.3s ease;
        text-transform: uppercase;
        box-shadow: 0 4px 15px rgba(201, 176, 55, 0.2);
    }

    .action-btn:hover {
        background-color: #d4bc4a;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(201, 176, 55, 0.3);
    }

    /* SECONDARY BUTTON */
    .secondary-btn {
        display: block;
        margin-top: 20px;
        color: var(--text-medium);
        text-decoration: none;
        font-size: 0.95rem;
        transition: color 0.3s;
        border: 1px solid var(--border-light);
        padding: 15px 0;
        border-radius: 50px;
    }

    .secondary-btn:hover {
        color: var(--white);
        border-color: var(--gold);
        background: rgba(255, 255, 255, 0.05);
    }

    .footer-note {
        text-align: center;
        padding: 20px 0;
        color: #888;
        font-size: 0.85rem;
    }
</style>

<div class="dashboard-card">

    <?php if ($identity): ?>
        
        <h1 class="dashboard-title">Academic Portal</h1>
        <div class="dashboard-subtitle">
            Welcome back, <?= h($identity->get('username')) ?>
        </div>

        <div class="clock-container">
            <div id="clock" class="time-text">--:--</div>
            <div id="date" class="date-text">Loading Calendar...</div>
        </div>

        <?= $this->Form->postLink(
            'Record Presence',
            ['controller' => 'Attendance', 'action' => 'clockIn'], 
            [
                'class' => 'action-btn', 
                'confirm' => 'Confirm: Record your academic presence for today?',
                'block' => true
            ]
        ) ?>
        <?= $this->fetch('postLink') ?>

        <?= $this->Html->link(
            'View Engagement History',
            ['controller' => 'Attendance', 'action' => 'index'],
            ['class' => 'secondary-btn']
        ) ?>

    <?php else: ?>

        <h1 class="dashboard-title">Academic Presence</h1>
        <div class="dashboard-subtitle">
            Please authenticate to access the system.
        </div>

        <?= $this->Html->link(
            'Access Student Portal',
            ['controller' => 'AuthorizedUser', 'action' => 'login'],
            ['class' => 'action-btn']
        ) ?>

        <div style="margin-top: 30px; font-size: 0.85rem; color: var(--text-medium);">
            New student? 
            <?= $this->Html->link(
                'Register here',
                ['controller' => 'Student', 'action' => 'add'],
                ['style' => 'color: var(--gold); text-decoration: none; font-weight: bold;']
            ) ?>
        </div>

    <?php endif; ?>

</div>

<div class="footer-note">
    © 2026 Academic Presence Intelligence System
</div>

<script>
    function updateClock() {
        const now = new Date();
        
        // Time: 09:41
        const timeString = now.toLocaleTimeString('en-GB', { 
            hour: '2-digit', 
            minute: '2-digit' 
        });
        
        // Date: Monday, 24 October
        const dateString = now.toLocaleDateString('en-US', { 
            weekday: 'long', 
            day: 'numeric', 
            month: 'long',
            year: 'numeric'
        });
        
        const clockEl = document.getElementById('clock');
        const dateEl = document.getElementById('date');
        
        if (clockEl) clockEl.innerText = timeString;
        if (dateEl) dateEl.innerText = dateString;
    }
    
    // Update every second
    setInterval(updateClock, 1000);
    updateClock(); 
</script>