
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative min-h-[60vh] bg-gradient-to-br from-emerald-50 via-white to-green-50 flex items-center overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #10b981 2px, transparent 2px), radial-gradient(circle at 75% 75%, #059669 1px, transparent 1px); background-size: 50px 50px, 30px 30px;"></div>
    </div>

    <!-- Floating Elements -->
    <div class="absolute top-20 left-10 w-20 h-20 bg-emerald-100 rounded-full animate-bounce-subtle opacity-60"></div>
    <div class="absolute top-40 right-20 w-16 h-16 bg-green-100 rounded-full animate-bounce-subtle opacity-60" style="animation-delay: 1s;"></div>
    <div class="absolute bottom-40 left-20 w-12 h-12 bg-emerald-200 rounded-full animate-bounce-subtle opacity-60" style="animation-delay: 2s;"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-4xl mx-auto animate-fade-in-up">
            <!-- Trust Badge -->
            <div class="inline-flex items-center bg-emerald-100 text-emerald-800 px-4 py-2 rounded-full font-accent font-medium text-sm mb-6">
                <i class="fas fa-trophy mr-2"></i>
                Real Stories • Real Impact
            </div>

            <!-- Main Headline -->
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                Success Stories That 
                <span class="bg-gradient-to-r from-emerald-600 to-green-500 bg-clip-text text-transparent">
                    Inspire Dreams
                </span>
            </h1>

            <!-- Supporting Text -->
            <p class="font-accent text-lg md:text-xl text-gray-600 leading-relaxed mb-8 max-w-3xl mx-auto">
                Discover incredible journeys of determination, growth, and achievement. These remarkable individuals transformed challenges into triumphs through education and unwavering spirit.
            </p>

            <!-- Stats -->
            <div class="grid grid-cols-3 gap-6 max-w-2xl mx-auto">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-4 shadow-lg border border-emerald-100">
                    <div class="font-display text-2xl md:text-3xl font-bold text-emerald-600"><?= count($success_stories) ?>+</div>
                    <div class="font-accent text-sm text-gray-600">Success Stories</div>
                </div>
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-4 shadow-lg border border-emerald-100">
                    <div class="font-display text-2xl md:text-3xl font-bold text-green-600">100%</div>
                    <div class="font-accent text-sm text-gray-600">Career Growth</div>
                </div>
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-4 shadow-lg border border-emerald-100">
                    <div class="font-display text-2xl md:text-3xl font-bold text-emerald-500">∞</div>
                    <div class="font-accent text-sm text-gray-600">Lives Impacted</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories Grid -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (!empty($success_stories)): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($success_stories as $index => $story): ?>
                    <article class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100 overflow-hidden animate-fade-in-up" style="animation-delay: <?= $index * 0.1 ?>s;">
                        <!-- Story Header -->
                        <div class="relative p-6 bg-gradient-to-br from-emerald-50 to-green-50 border-b border-emerald-100">
                            <div class="flex items-center space-x-4">
                                <div class="w-20 h-20 rounded-2xl overflow-hidden bg-emerald-100 flex-shrink-0 ring-4 ring-white shadow-lg">
                                    <?php if (!empty($story['image']) && file_exists(WRITEPATH . 'uploads/success_stories/' . $story['image'])): ?>
                                        <img src="<?= base_url('uploads/success_stories/' . $story['image']) ?>"
                                             alt="<?= esc($story['name']) ?>" 
                                             class="w-full h-full object-cover">
                                    <?php else: ?>
                                        <div class="w-full h-full bg-gradient-to-br from-emerald-200 to-green-200 flex items-center justify-center">
                                            <i class="fas fa-user-graduate text-emerald-700 text-2xl"></i>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-heading text-xl font-bold text-gray-900 mb-1"><?= esc($story['name']) ?></h3>
                                    <p class="font-accent text-emerald-700 font-semibold mb-2"><?= esc($story['current_position']) ?></p>
                                    <span class="inline-flex items-center bg-emerald-100 text-emerald-800 px-3 py-1 rounded-full text-xs font-accent font-medium">
                                        <i class="fas fa-check-circle mr-1"></i>
                                        Success Graduate
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Story Content -->
                        <div class="p-6">
                            <div class="space-y-4">
                                <?php if (!empty($story['previous_situation'])): ?>
                                    <div class="bg-gray-50 rounded-xl p-4 border-l-4 border-gray-300">
                                        <h4 class="font-heading text-sm font-semibold text-gray-700 mb-2 flex items-center">
                                            <i class="fas fa-clock text-gray-500 mr-2"></i>
                                            Before Our Program
                                        </h4>
                                        <p class="font-accent text-gray-600 text-sm leading-relaxed">
                                            <?= esc(substr($story['previous_situation'], 0, 100)) ?><?= strlen($story['previous_situation']) > 100 ? '...' : '' ?>
                                        </p>
                                    </div>
                                <?php endif; ?>

                                <div class="bg-emerald-50 rounded-xl p-4 border-l-4 border-emerald-400">
                                    <h4 class="font-heading text-sm font-semibold text-emerald-800 mb-2 flex items-center">
                                        <i class="fas fa-star text-emerald-600 mr-2"></i>
                                        Success Journey
                                    </h4>
                                    <p class="font-accent text-emerald-700 text-sm leading-relaxed">
                                        <?= esc(substr($story['story'], 0, 120)) ?><?= strlen($story['story']) > 120 ? '...' : '' ?>
                                    </p>
                                </div>

                                <?php if (!empty($story['achievements'])): ?>
                                    <div class="bg-green-50 rounded-xl p-4 border-l-4 border-green-400">
                                        <h4 class="font-heading text-sm font-semibold text-green-800 mb-2 flex items-center">
                                            <i class="fas fa-trophy text-green-600 mr-2"></i>
                                            Key Achievements
                                        </h4>
                                        <p class="font-accent text-green-700 text-sm leading-relaxed">
                                            <?= esc(substr($story['achievements'], 0, 100)) ?><?= strlen($story['achievements']) > 100 ? '...' : '' ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Footer -->
                            <div class="flex items-center justify-between mt-6 pt-4 border-t border-gray-100">
                                <span class="text-xs text-gray-500 font-accent">
                                    <i class="fas fa-calendar mr-1"></i>
                                    Graduate <?= date('Y', strtotime($story['created_at'] ?? 'now')) ?>
                                </span>
                                <button onclick="viewStory('<?= esc($story['name']) ?>', '<?= esc($story['current_position']) ?>', '<?= esc($story['previous_situation'] ?? '') ?>', '<?= esc($story['story']) ?>', '<?= esc($story['achievements'] ?? '') ?>', '<?= !empty($story['image']) ? base_url('uploads/success_stories/' . $story['image']) : '' ?>')"
                                        class="text-emerald-600 hover:text-emerald-700 font-accent font-medium text-sm flex items-center group">
                                    Read Full Story
                                    <i class="fas fa-arrow-right ml-1 group-hover:translate-x-1 transition-transform duration-200"></i>
                                </button>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <!-- Empty State -->
            <div class="text-center py-20">
                <div class="w-24 h-24 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-star text-emerald-500 text-3xl"></i>
                </div>
                <h3 class="font-heading text-2xl font-bold text-gray-900 mb-4">Success Stories Coming Soon</h3>
                <p class="font-accent text-gray-600 max-w-md mx-auto">
                    We're currently documenting amazing success stories from our students. Check back soon!
                </p>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Story Detail Modal -->
<div id="storyModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-3xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden">
            <!-- Modal Header -->
            <div class="bg-gradient-to-r from-emerald-500 to-green-500 text-white p-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div id="modalImage" class="w-16 h-16 rounded-2xl overflow-hidden bg-white/20 flex-shrink-0">
                            <div class="w-full h-full bg-white/30 flex items-center justify-center">
                                <i class="fas fa-user-graduate text-white text-xl"></i>
                            </div>
                        </div>
                        <div>
                            <h2 id="modalName" class="font-heading text-2xl font-bold"></h2>
                            <p id="modalPosition" class="font-accent text-emerald-100"></p>
                        </div>
                    </div>
                    <button onclick="closeModal()" class="text-white hover:text-emerald-200 transition-colors duration-200">
                        <i class="fas fa-times text-2xl"></i>
                    </button>
                </div>
            </div>

            <!-- Modal Content -->
            <div class="p-6 overflow-y-auto max-h-[60vh]">
                <div class="space-y-6">
                    <div id="modalPreviousSituation" class="hidden">
                        <h3 class="font-heading text-lg font-semibold text-gray-800 mb-3 flex items-center">
                            <i class="fas fa-clock text-gray-500 mr-2"></i>
                            Before Our Program
                        </h3>
                        <div class="bg-gray-50 rounded-xl p-4 border-l-4 border-gray-300">
                            <p id="modalPreviousText" class="font-accent text-gray-700 leading-relaxed"></p>
                        </div>
                    </div>

                    <div>
                        <h3 class="font-heading text-lg font-semibold text-emerald-800 mb-3 flex items-center">
                            <i class="fas fa-star text-emerald-600 mr-2"></i>
                            Success Journey
                        </h3>
                        <div class="bg-emerald-50 rounded-xl p-4 border-l-4 border-emerald-400">
                            <p id="modalStory" class="font-accent text-emerald-700 leading-relaxed"></p>
                        </div>
                    </div>

                    <div id="modalAchievements" class="hidden">
                        <h3 class="font-heading text-lg font-semibold text-green-800 mb-3 flex items-center">
                            <i class="fas fa-trophy text-green-600 mr-2"></i>
                            Key Achievements
                        </h3>
                        <div class="bg-green-50 rounded-xl p-4 border-l-4 border-green-400">
                            <p id="modalAchievementsText" class="font-accent text-green-700 leading-relaxed"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-br from-emerald-600 via-emerald-700 to-green-600 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 30% 40%, #ffffff 2px, transparent 2px), radial-gradient(circle at 70% 60%, #ffffff 1px, transparent 1px); background-size: 80px 80px, 60px 60px;"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-4xl mx-auto animate-fade-in-up">
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                Be Part of the Next Success Story
            </h2>
            <p class="font-accent text-lg md:text-xl text-white/90 leading-relaxed mb-10">
                Your support can create the next inspiring journey. Help us transform more lives through education and mentorship.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="#donate" 
                   class="bg-white text-emerald-700 px-10 py-4 rounded-xl font-heading font-bold hover:bg-gray-50 transition-all duration-200 shadow-xl hover:shadow-2xl transform hover:-translate-y-1 flex items-center justify-center">
                    <i class="fas fa-heart mr-2"></i>
                    Support Students
                </a>
                <a href="<?= base_url(($language ?? 'en') . '/beneficiaries') ?>" 
                   class="bg-white/10 backdrop-blur-sm border-2 border-white/30 text-white px-10 py-4 rounded-xl font-heading font-bold hover:bg-white/20 hover:border-white/50 transition-all duration-200 flex items-center justify-center">
                    <i class="fas fa-users mr-2"></i>
                    Meet Current Students
                </a>
            </div>
        </div>
    </div>
</section>

<script>
function viewStory(name, position, previousSituation, story, achievements, image) {
    document.getElementById('modalName').textContent = name;
    document.getElementById('modalPosition').textContent = position;
    document.getElementById('modalStory').textContent = story;
    
    // Handle image
    const modalImage = document.getElementById('modalImage');
    if (image) {
        modalImage.innerHTML = `<img src="${image}" alt="${name}" class="w-full h-full object-cover">`;
    } else {
        modalImage.innerHTML = '<div class="w-full h-full bg-white/30 flex items-center justify-center"><i class="fas fa-user-graduate text-white text-xl"></i></div>';
    }
    
    // Handle previous situation
    const prevSection = document.getElementById('modalPreviousSituation');
    if (previousSituation && previousSituation.trim()) {
        document.getElementById('modalPreviousText').textContent = previousSituation;
        prevSection.classList.remove('hidden');
    } else {
        prevSection.classList.add('hidden');
    }
    
    // Handle achievements
    const achievSection = document.getElementById('modalAchievements');
    if (achievements && achievements.trim()) {
        document.getElementById('modalAchievementsText').textContent = achievements;
        achievSection.classList.remove('hidden');
    } else {
        achievSection.classList.add('hidden');
    }
    
    document.getElementById('storyModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    document.getElementById('storyModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Close modal on outside click
document.getElementById('storyModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});

// Close modal on escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
});
</script>

<?= $this->endSection() ?>
