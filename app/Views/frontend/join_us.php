
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative min-h-[70vh] bg-gradient-to-br from-blue-50 via-white to-indigo-50 flex items-center overflow-hidden -mt-16 pt-16">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #3b82f6 2px, transparent 2px), radial-gradient(circle at 75% 75%, #6366f1 1px, transparent 1px); background-size: 50px 50px, 30px 30px;"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-5xl mx-auto">
            <!-- Trust Badge -->
            <div class="inline-flex items-center bg-blue-100 text-blue-800 px-6 py-3 rounded-full font-medium text-sm mb-8 shadow-lg">
                <i class="fas fa-handshake mr-2"></i>
                Join Our Mission • Make a Difference
            </div>

            <!-- Main Headline -->
            <h1 class="font-bold text-5xl md:text-6xl lg:text-7xl text-gray-900 leading-tight mb-8">
                Join 
                <span class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 bg-clip-text text-transparent">
                    Our Mission
                </span>
            </h1>

            <!-- Supporting Text -->
            <p class="text-xl md:text-2xl text-gray-600 leading-relaxed mb-12 max-w-4xl mx-auto">
                Be part of transforming underprivileged students into job-ready professionals. Choose how you'd like to contribute to our mission.
            </p>
        </div>
    </div>
</section>

<!-- Ways to Join Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                Ways to Make a Difference
            </h2>
            <p class="font-accent text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Choose your path to contribute to our mission of transforming lives through education
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Student -->
            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-green-100">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-700 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <i class="fas fa-graduation-cap text-white text-2xl"></i>
                </div>
                <h3 class="font-heading text-xl font-bold text-gray-900 mb-4">Student</h3>
                <p class="font-accent text-gray-600 mb-6 leading-relaxed">
                    Apply to join our educational programs and get access to skill development, mentorship, and career opportunities.
                </p>
                <button onclick="openJoinForm('student')" 
                   class="inline-flex items-center bg-green-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-green-700 transition-all duration-200 w-full justify-center">
                    Apply as Student
                    <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>

            <!-- Volunteer -->
            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-blue-100">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <i class="fas fa-heart text-white text-2xl"></i>
                </div>
                <h3 class="font-heading text-xl font-bold text-gray-900 mb-4">Volunteer</h3>
                <p class="font-accent text-gray-600 mb-6 leading-relaxed">
                    Share your skills and time to mentor students, conduct workshops, or support our programs.
                </p>
                <button onclick="openJoinForm('volunteer')" 
                   class="inline-flex items-center bg-blue-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-blue-700 transition-all duration-200 w-full justify-center">
                    Volunteer With Us
                    <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>

            <!-- Donor -->
            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-purple-100">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-700 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <i class="fas fa-donate text-white text-2xl"></i>
                </div>
                <h3 class="font-heading text-xl font-bold text-gray-900 mb-4">Donor</h3>
                <p class="font-accent text-gray-600 mb-6 leading-relaxed">
                    Support student education fees, learning materials, and program operations with your generous contributions.
                </p>
                <button onclick="openJoinForm('donor')" 
                   class="inline-flex items-center bg-purple-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-purple-700 transition-all duration-200 w-full justify-center">
                    Become a Donor
                    <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Modal Overlay -->
<div id="joinFormModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="p-8">
            <!-- Modal Header -->
            <div class="flex justify-between items-center mb-6">
                <h3 id="modalTitle" class="font-heading text-2xl font-bold text-gray-900"></h3>
                <button onclick="closeJoinForm()" class="text-gray-400 hover:text-gray-600 text-2xl">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- Student Form -->
            <div id="studentForm" class="hidden">
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block font-accent font-semibold text-gray-700 mb-2">Full Name *</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" required>
                        </div>
                        <div>
                            <label class="block font-accent font-semibold text-gray-700 mb-2">Email *</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block font-accent font-semibold text-gray-700 mb-2">Phone Number *</label>
                            <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" required>
                        </div>
                        <div>
                            <label class="block font-accent font-semibold text-gray-700 mb-2">Age</label>
                            <input type="number" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        </div>
                    </div>
                    <div>
                        <label class="block font-accent font-semibold text-gray-700 mb-2">Educational Background *</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" required>
                            <option value="">Select your education level</option>
                            <option value="high-school">High School</option>
                            <option value="graduation">Graduation</option>
                            <option value="post-graduation">Post Graduation</option>
                            <option value="diploma">Diploma</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="block font-accent font-semibold text-gray-700 mb-2">Field of Interest *</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" required>
                            <option value="">Select field of interest</option>
                            <option value="technology">Technology & IT</option>
                            <option value="business">Business & Management</option>
                            <option value="healthcare">Healthcare</option>
                            <option value="education">Education</option>
                            <option value="arts">Arts & Creative</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="block font-accent font-semibold text-gray-700 mb-2">Why do you want to join our program? *</label>
                        <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Tell us about your goals and motivations..." required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-green-600 text-white py-4 rounded-xl font-semibold hover:bg-green-700 transition-colors duration-200">
                        Submit Application
                    </button>
                </form>
            </div>

            <!-- Volunteer Form -->
            <div id="volunteerForm" class="hidden">
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block font-accent font-semibold text-gray-700 mb-2">Full Name *</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                        </div>
                        <div>
                            <label class="block font-accent font-semibold text-gray-700 mb-2">Email *</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block font-accent font-semibold text-gray-700 mb-2">Phone Number *</label>
                            <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                        </div>
                        <div>
                            <label class="block font-accent font-semibold text-gray-700 mb-2">Profession</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="e.g., Software Engineer, Teacher">
                        </div>
                    </div>
                    <div>
                        <label class="block font-accent font-semibold text-gray-700 mb-2">Skills & Expertise *</label>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2" value="teaching">
                                <span class="font-accent text-sm">Teaching</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2" value="mentoring">
                                <span class="font-accent text-sm">Mentoring</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2" value="technology">
                                <span class="font-accent text-sm">Technology</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2" value="communication">
                                <span class="font-accent text-sm">Communication</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2" value="management">
                                <span class="font-accent text-sm">Management</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2" value="fundraising">
                                <span class="font-accent text-sm">Fundraising</span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <label class="block font-accent font-semibold text-gray-700 mb-2">Available Time Commitment *</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                            <option value="">Select time commitment</option>
                            <option value="1-2-hours-week">1-2 hours per week</option>
                            <option value="3-5-hours-week">3-5 hours per week</option>
                            <option value="5-10-hours-week">5-10 hours per week</option>
                            <option value="10-plus-hours-week">10+ hours per week</option>
                            <option value="project-based">Project-based</option>
                        </select>
                    </div>
                    <div>
                        <label class="block font-accent font-semibold text-gray-700 mb-2">How would you like to contribute? *</label>
                        <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Describe how you'd like to help our mission..." required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-4 rounded-xl font-semibold hover:bg-blue-700 transition-colors duration-200">
                        Join as Volunteer
                    </button>
                </form>
            </div>

            <!-- Donor Form -->
            <div id="donorForm" class="hidden">
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block font-accent font-semibold text-gray-700 mb-2">Full Name *</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" required>
                        </div>
                        <div>
                            <label class="block font-accent font-semibold text-gray-700 mb-2">Email *</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block font-accent font-semibold text-gray-700 mb-2">Phone Number *</label>
                            <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" required>
                        </div>
                        <div>
                            <label class="block font-accent font-semibold text-gray-700 mb-2">Organization (Optional)</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" placeholder="Company/Organization name">
                        </div>
                    </div>
                    <div>
                        <label class="block font-accent font-semibold text-gray-700 mb-2">Donation Type *</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" required>
                            <option value="">Select donation type</option>
                            <option value="one-time">One-time Donation</option>
                            <option value="monthly">Monthly Recurring</option>
                            <option value="quarterly">Quarterly</option>
                            <option value="annual">Annual</option>
                            <option value="in-kind">In-kind Donation</option>
                        </select>
                    </div>
                    <div>
                        <label class="block font-accent font-semibold text-gray-700 mb-2">Preferred Donation Amount (Optional)</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                            <option value="">Select amount range</option>
                            <option value="500-1000">₹500 - ₹1,000</option>
                            <option value="1000-5000">₹1,000 - ₹5,000</option>
                            <option value="5000-10000">₹5,000 - ₹10,000</option>
                            <option value="10000-25000">₹10,000 - ₹25,000</option>
                            <option value="25000-plus">₹25,000+</option>
                            <option value="custom">Custom Amount</option>
                        </select>
                    </div>
                    <div>
                        <label class="block font-accent font-semibold text-gray-700 mb-2">Areas you'd like to support</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2" value="education-fees">
                                <span class="font-accent text-sm">Education Fees</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2" value="learning-materials">
                                <span class="font-accent text-sm">Learning Materials</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2" value="infrastructure">
                                <span class="font-accent text-sm">Infrastructure</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2" value="scholarships">
                                <span class="font-accent text-sm">Scholarships</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2" value="technology">
                                <span class="font-accent text-sm">Technology & Equipment</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2" value="general">
                                <span class="font-accent text-sm">General Support</span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <label class="block font-accent font-semibold text-gray-700 mb-2">Message (Optional)</label>
                        <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" placeholder="Any additional message or specific requirements..."></textarea>
                    </div>
                    <button type="submit" class="w-full bg-purple-600 text-white py-4 rounded-xl font-semibold hover:bg-purple-700 transition-colors duration-200">
                        Submit Donation Interest
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Impact Stats Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                Join Our Growing Community
            </h2>
            <p class="font-accent text-lg text-gray-600 max-w-3xl mx-auto">
                Be part of a movement that's creating real impact in education and empowerment
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <i class="fas fa-users text-white text-2xl"></i>
                </div>
                <h3 class="font-heading text-3xl font-bold text-gray-900 mb-2">150+</h3>
                <p class="font-accent text-gray-600">Active Volunteers</p>
            </div>
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <i class="fas fa-graduation-cap text-white text-2xl"></i>
                </div>
                <h3 class="font-heading text-3xl font-bold text-gray-900 mb-2">500+</h3>
                <p class="font-accent text-gray-600">Students Supported</p>
            </div>
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <i class="fas fa-heart text-white text-2xl"></i>
                </div>
                <h3 class="font-heading text-3xl font-bold text-gray-900 mb-2">100+</h3>
                <p class="font-accent text-gray-600">Generous Donors</p>
            </div>
        </div>
    </div>
</section>

<script>
function openJoinForm(type) {
    const modal = document.getElementById('joinFormModal');
    const modalTitle = document.getElementById('modalTitle');
    
    // Hide all forms
    document.getElementById('studentForm').classList.add('hidden');
    document.getElementById('volunteerForm').classList.add('hidden');
    document.getElementById('donorForm').classList.add('hidden');
    
    // Show specific form and set title
    switch(type) {
        case 'student':
            document.getElementById('studentForm').classList.remove('hidden');
            modalTitle.textContent = 'Apply as Student';
            break;
        case 'volunteer':
            document.getElementById('volunteerForm').classList.remove('hidden');
            modalTitle.textContent = 'Join as Volunteer';
            break;
        case 'donor':
            document.getElementById('donorForm').classList.remove('hidden');
            modalTitle.textContent = 'Become a Donor';
            break;
    }
    
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeJoinForm() {
    const modal = document.getElementById('joinFormModal');
    modal.classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside
document.getElementById('joinFormModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeJoinForm();
    }
});

// Handle form submissions
document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        // Here you would typically send the form data to your backend
        alert('Thank you for your interest! We will contact you soon.');
        closeJoinForm();
    });
});
</script>

<?= $this->endSection() ?>
