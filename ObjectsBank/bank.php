<!-- Gabriel Z. Escaño -->
<!-- WD - 201 -->

<?php
include "classes/Account.php";
include "classes/Customer.php";

$accounts = [
    new Account("2024-001", "Savings Account", 25000),
    new Account("2024-002", "Checking Account", -1500),
    new Account("2024-003", "Payroll Account", 18500),
    new Account("2024-004", "Investment Account", -3200)
];

$customer = new Customer("Incougar", "Smith", $accounts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bank Accounts</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<img src="images/logo.png" alt="Bank Logo">

<section>
    <h2>Account Summary for: <?= $customer->getFullName(); ?></h2>

    <table>
        <tr>
            <th>Account Number</th>
            <th>Account Type</th>
            <th>Balance</th>
        </tr>

        <?php foreach ($customer->accounts as $account): ?>
            <tr>
                <td><?= $account->accountNumber; ?></td>
                <td><?= $account->accountType; ?></td>

                <?php if ($account->balance >= 0): ?>
                    <td>
                        ₱<?= number_format($account->balance, 2); ?>
                    </td>
                <?php else: ?>
                    <td class="overdrawn">
                        ₱<?= number_format($account->balance, 2); ?>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</section>

</body>
</html>