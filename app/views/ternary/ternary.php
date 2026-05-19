<?= loadPartial("head"); ?>
<?= loadPartial("navbar"); ?>

<?php
/* Page-specific styles to ensure high contrast and readable text on the Ternary Cheatsheet */
echo <<<'CSS'
<style>
    .ternary-main { color: #0f172a; background-color: #ffffff; }
    .ternary-main h1, .ternary-main h2, .ternary-main h3 { color: #0f172a; }
    .ternary-main p, .ternary-main dt, .ternary-main dd, .ternary-main td, .ternary-main th, .ternary-main code { color: #0f172a; }
    .ternary-main .bg-slate-50, .ternary-main .bg-white { background-color: #ffffff !important; }
    .ternary-main .rounded.bg-slate-50 { background-color: #f8fafc !important; }
    /* Make header clearly visible on this page */
    .ternary-main header { background-color: #ffffff !important; }
    .ternary-main header p, .ternary-main header h1, .ternary-main header h2 { color: #0f172a !important; }
    .ternary-main header .text-indigo-700 { color: #0f4adf !important; }
</style>
CSS;

$ternaryCases = $ternaryCases ?? [];

// Example sample listing to demonstrate ternary logic outputs
$sample = (object) [
    'title' => 'Frontend Developer',
    'salary' => 75000,
    'city' => '',
    'state' => 'CA',
    'address' => '123 Market St',
    'tags' => 'remote,react',
    'level' => 'mid'
];

$location = $sample->city ?: $sample->state ?: $sample->address;
$salaryBand = $sample->salary >= 90000 ? 'High' : ($sample->salary >= 55000 ? 'Mid' : 'Entry');
$remoteLabel = strpos($sample->tags, 'remote') !== false ? 'Remote-friendly' : 'On-site preferred';
$seniority = $sample->level === 'senior' ? 'Senior' : ($sample->level === 'mid' ? 'Mid-level' : 'Junior');
?>

<main class="ternary-main flex-1 py-10">
    <div class="mx-auto max-w-6xl px-4">
        <header class="mb-6 rounded-2xl border border-slate-200 bg-white/90 p-6 shadow-sm">
            <p class="text-xs font-semibold uppercase tracking-wider text-indigo-700">Ternary Cheatsheet</p>
            <h1 class="mt-2 text-3xl font-black tracking-tight text-slate-950">Ternary Cheatsheet — Job Listing Helpers</h1>
            <p class="mt-2 max-w-3xl text-sm leading-relaxed text-slate-500">Real ternary patterns used around job listings, with live examples using a sample listing so you can see both the code and the computed result.</p>
        </header>

        <section class="grid gap-6 lg:grid-cols-[1fr_0.9fr]">
            <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">
                <h2 class="text-lg font-semibold text-slate-900">Sample Listing</h2>
                <p class="mt-2 text-sm text-slate-600">Title: <strong><?= htmlspecialchars($sample->title) ?></strong></p>
                <p class="mt-1 text-sm text-slate-600">Raw data: salary <?= htmlspecialchars((string)$sample->salary) ?> — tags: <?= htmlspecialchars($sample->tags) ?></p>

                <div class="mt-4 grid gap-3">
                    <div class="rounded bg-slate-50 p-3">
                        <dt class="text-xs text-slate-500">Location (fallback)</dt>
                        <dd class="font-semibold text-slate-900"><?php echo htmlspecialchars($location) ?></dd>
                        <code class="block mt-1 text-xs text-slate-700">&lt;?= $listing->city ?: $listing->state ?: $listing->address ?&gt;</code>
                    </div>

                    <div class="rounded bg-slate-50 p-3">
                        <dt class="text-xs text-slate-500">Salary band (nested ternary)</dt>
                        <dd class="font-semibold text-slate-900"><?= htmlspecialchars($salaryBand) ?></dd>
                        <code class="block mt-1 text-xs text-slate-700">$band = $listing->salary &gt;= 90000 ? 'High' : ($listing->salary &gt;= 55000 ? 'Mid' : 'Entry');</code>
                    </div>

                    <div class="rounded bg-slate-50 p-3">
                        <dt class="text-xs text-slate-500">Remote label (string check)</dt>
                        <dd class="font-semibold text-slate-900"><?= htmlspecialchars($remoteLabel) ?></dd>
                        <code class="block mt-1 text-xs text-slate-700">$label = strpos($listing->tags, 'remote') !== false ? 'Remote-friendly' : 'On-site preferred';</code>
                    </div>

                    <div class="rounded bg-slate-50 p-3">
                        <dt class="text-xs text-slate-500">Seniority label</dt>
                        <dd class="font-semibold text-slate-900"><?= htmlspecialchars($seniority) ?></dd>
                        <code class="block mt-1 text-xs text-slate-700">$sen = $listing->level === 'senior' ? 'Senior' : ($listing->level === 'mid' ? 'Mid-level' : 'Junior');</code>
                    </div>
                </div>
            </div>

            <aside class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6">
                <h3 class="text-md font-semibold">Ternary usages found</h3>
                <p class="text-sm text-slate-500 mt-2">Examples discovered across the codebase — helpful when refactoring or documenting patterns.</p>
                <div class="mt-3 overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-200 text-sm">
                        <thead class="bg-slate-50">
                            <tr>
                                <th class="px-3 py-2 text-left font-semibold text-slate-700">File</th>
                                <th class="px-3 py-2 text-left font-semibold text-slate-700">Line</th>
                                <th class="px-3 py-2 text-left font-semibold text-slate-700">Expression</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <?php foreach ($ternaryCases as $case): ?>
                                <tr>
                                    <td class="px-3 py-2 font-mono text-xs text-slate-700"><?= htmlspecialchars($case['file']) ?></td>
                                    <td class="px-3 py-2 text-slate-700"><?= htmlspecialchars((string)$case['line']) ?></td>
                                    <td class="px-3 py-2 text-slate-600"><code class="rounded bg-slate-100 px-2 py-1 text-xs"><?= htmlspecialchars($case['expression']) ?></code></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </aside>
        </section>
    </div>
</main>

<?= loadPartial("footer"); ?>
