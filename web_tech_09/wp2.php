<?php
$employees = [
    ['name' => 'John Doe', 'department' => 'IT', 'salary' => 6000, 'experience' => 5, 'joining_year' => 2018, 'projects' => ['ERP System', 'Mobile App']],
    ['name' => 'Jane Smith', 'department' => 'HR', 'salary' => 4500, 'experience' => 7, 'joining_year' => 2016, 'projects' => ['Employee Portal']],
    ['name' => 'Michael Johnson', 'department' => 'Finance', 'salary' => 7000, 'experience' => 10, 'joining_year' => 2013, 'projects' => ['Accounting Software', 'Investment Tracker']],
    ['name' => 'Emily Davis', 'department' => 'Marketing', 'salary' => 5200, 'experience' => 6, 'joining_year' => 2017, 'projects' => ['SEO Campaign', 'Ad Analytics']],
    ['name' => 'Robert Brown', 'department' => 'Sales', 'salary' => 4800, 'experience' => 4, 'joining_year' => 2019, 'projects' => ['E-commerce Expansion', 'Retail CRM']],
];

echo "<h2>Employee Management System</h2>";

// Display employee data
echo "<table border='1'><tr><th>Name</th><th>Department</th><th>Salary</th><th>Experience</th><th>Joining Year</th><th>Projects</th></tr>";
foreach ($employees as $e) {
    echo "<tr><td>{$e['name']}</td><td>{$e['department']}</td><td>\${$e['salary']}</td><td>{$e['experience']} years</td><td>{$e['joining_year']}</td><td>" . implode(", ", $e['projects']) . "</td></tr>";
}
echo "</table>";

// Salary statistics
$salaries = array_column($employees, 'salary');
echo "<p>Average Salary: \$" . (array_sum($salaries) / count($salaries)) . "</p>";
echo "<p>Highest Salary: \$" . max($salaries) . "</p>";
echo "<p>Lowest Salary: \$" . min($salaries) . "</p>";

// Department-wise salary analysis
$dept_salaries = array_reduce($employees, function ($carry, $e) {
    $carry[$e['department']] = ($carry[$e['department']] ?? 0) + $e['salary'];
    return $carry;
}, []);
echo "<h3>Department Salary Totals</h3><ul>";
foreach ($dept_salaries as $dept => $total) {
    echo "<li>$dept: \$$total</li>";
}
echo "</ul>";

// Filter experienced employees
$experienced = array_filter($employees, fn($e) => $e['experience'] > 5);
echo "<h3>Employees with >5 Years of Experience</h3><ul>";
foreach ($experienced as $e) echo "<li>{$e['name']} ({$e['experience']} years)</li>";
echo "</ul>";

// Employees joined before 2017
$joined_before = array_filter($employees, fn($e) => $e['joining_year'] < 2017);
echo "<h3>Employees Joined Before 2017</h3><ul>";
foreach ($joined_before as $e) echo "<li>{$e['name']} (Joined: {$e['joining_year']})</li>";
echo "</ul>";

// Employees working on a specific project
$project_name = 'SEO Campaign';
$project_workers = array_filter($employees, fn($e) => in_array($project_name, $e['projects']));
echo "<h3>Employees on '$project_name'</h3><ul>";
foreach ($project_workers as $e) echo "<li>{$e['name']}</li>";
echo "</ul>";

// Sorting by salary
usort($employees, fn($a, $b) => $b['salary'] <=> $a['salary']);
echo "<h3>Employees Sorted by Salary (Desc)</h3><ul>";
foreach ($employees as $e) echo "<li>{$e['name']} (\${$e['salary']})</li>";
echo "</ul>";

// Unique departments and projects
echo "<h3>Unique Departments</h3><p>" . implode(', ', array_unique(array_column($employees, 'department'))) . "</p>";
echo "<h3>Unique Projects</h3><p>" . implode(', ', array_unique(array_merge(...array_column($employees, 'projects')))) . "</p>";

// Promote employees based on experience
$employees = array_map(fn($e) => $e['experience'] > 7 ? array_merge($e, ['salary' => $e['salary'] * 1.1]) : $e, $employees);
echo "<h3>Salary Increased for Employees with >7 Years Experience</h3>";

// JSON report
echo "<h3>JSON Report</h3><pre>" . json_encode($employees, JSON_PRETTY_PRINT) . "</pre>";
?>