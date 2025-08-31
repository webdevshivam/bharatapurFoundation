
<?= $this->extend('frontend/layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative min-h-[70vh] bg-gradient-to-br from-stone-800 via-stone-900 to-stone-800 flex items-center overflow-hidden">
    <!-- Golden Particles Background -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-2 h-2 bg-amber-400 rounded-full animate-pulse"></div>
        <div class="absolute top-40 right-20 w-3 h-3 bg-yellow-300 rounded-full animate-bounce" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-40 left-20 w-2 h-2 bg-amber-500 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-20 right-10 w-4 h-4 bg-yellow-400 rounded-full animate-bounce" style="animation-delay: 0.5s;"></div>
    </div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-5xl mx-auto py-20">
            <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-stone-100 leading-tight mb-8">
                Join Our 
                <span class="bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-500 bg-clip-text text-transparent">
                    Mission
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-stone-300 leading-relaxed mb-12 max-w-4xl mx-auto font-body">
                Be part of the change. Whether you're a student, teacher, or donor, there's a place for you in our mission to transform lives through education.
            </p>
        </div>
    </div>
</section>

<!-- Application Types Section -->
<section class="py-20 section-dark">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="section-title-dark">Choose Your Path</h2>
            <p class="section-subtitle-dark max-w-3xl mx-auto">
                Select the application type that best describes your role in our mission
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <!-- Student Application -->
            <div class="feature-card-dark text-center group cursor-pointer" onclick="showForm('student')">
                <div class="feature-icon-bharatpur group-hover:animate-bounce">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h3 class="font-heading text-xl font-bold text-stone-100 mb-4">Student Application</h3>
                <p class="text-stone-300 mb-6 font-body">
                    Apply for educational support, scholarships, and skill development programs
                </p>
                <div class="bg-gradient-to-r from-amber-500 to-yellow-400 text-stone-800 px-4 py-2 rounded-full text-sm font-semibold inline-block">
                    Apply Now
                </div>
            </div>
            
            <!-- Teacher/Volunteer Application -->
            <div class="feature-card-dark text-center group cursor-pointer" onclick="showForm('teacher')">
                <div class="feature-icon-bharatpur group-hover:animate-bounce">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3 class="font-heading text-xl font-bold text-stone-100 mb-4">Teacher/Volunteer</h3>
                <p class="text-stone-300 mb-6 font-body">
                    Join us as a volunteer teacher or mentor to guide and inspire students
                </p>
                <div class="bg-gradient-to-r from-amber-500 to-yellow-400 text-stone-800 px-4 py-2 rounded-full text-sm font-semibold inline-block">
                    Volunteer Now
                </div>
            </div>
            
            <!-- Donor Application -->
            <div class="feature-card-dark text-center group cursor-pointer" onclick="showForm('donor')">
                <div class="feature-icon-bharatpur group-hover:animate-bounce">
                    <i class="fas fa-heart"></i>
                </div>
                <h3 class="font-heading text-xl font-bold text-stone-100 mb-4">Donor/Sponsor</h3>
                <p class="text-stone-300 mb-6 font-body">
                    Support our mission through donations and sponsorships
                </p>
                <div class="bg-gradient-to-r from-amber-500 to-yellow-400 text-stone-800 px-4 py-2 rounded-full text-sm font-semibold inline-block">
                    Support Us
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Application Forms Section -->
<section class="py-20 section-dark-alt">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Student Application Form -->
        <div id="student-form" class="application-form hidden">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-stone-100 mb-4">Student Application</h2>
                    <p class="text-stone-300 text-lg font-body">Apply for educational support and skill development programs</p>
                </div>
                
                <div class="bg-stone-800/50 backdrop-blur-lg border border-amber-500/20 rounded-2xl p-8">
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-stone-200 font-heading font-semibold mb-2">Full Name *</label>
                                <input type="text" class="form-control-dark w-full" placeholder="Enter your full name" required>
                            </div>
                            <div>
                                <label class="block text-stone-200 font-heading font-semibold mb-2">Age *</label>
                                <input type="number" class="form-control-dark w-full" placeholder="Your age" min="16" max="35" required>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-stone-200 font-heading font-semibold mb-2">Email *</label>
                                <input type="email" class="form-control-dark w-full" placeholder="your.email@example.com" required>
                            </div>
                            <div>
                                <label class="block text-stone-200 font-heading font-semibold mb-2">Phone Number *</label>
                                <input type="tel" class="form-control-dark w-full" placeholder="+91 98765 43210" required>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-stone-200 font-heading font-semibold mb-2">Current Education Level *</label>
                            <select class="form-control-dark w-full" required>
                                <option value="">Select your education level</option>
                                <option value="high_school">High School (10th/12th)</option>
                                <option value="undergraduate">Undergraduate</option>
                                <option value="graduate">Graduate</option>
                                <option value="postgraduate">Postgraduate</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-stone-200 font-heading font-semibold mb-2">Field of Interest *</label>
                            <select class="form-control-dark w-full" required>
                                <option value="">Select your field of interest</option>
                                <option value="technology">Technology & Programming</option>
                                <option value="business">Business & Management</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="education">Education</option>
                                <option value="engineering">Engineering</option>
                                <option value="arts">Arts & Design</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-stone-200 font-heading font-semibold mb-2">Why do you want to join us? *</label>
                            <textarea class="form-control-dark w-full h-32" placeholder="Tell us about your goals and why you want to be part of our program..." required></textarea>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn-bharatpur-primary px-8 py-3">
                                <i class="fas fa-paper-plane mr-2"></i>
                                Submit Application
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Teacher/Volunteer Application Form -->
        <div id="teacher-form" class="application-form hidden">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-stone-100 mb-4">Teacher/Volunteer Application</h2>
                    <p class="text-stone-300 text-lg font-body">Join our team of dedicated educators and mentors</p>
                </div>
                
                <div class="bg-stone-800/50 backdrop-blur-lg border border-amber-500/20 rounded-2xl p-8">
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-stone-200 font-heading font-semibold mb-2">Full Name *</label>
                                <input type="text" class="form-control-dark w-full" placeholder="Enter your full name" required>
                            </div>
                            <div>
                                <label class="block text-stone-200 font-heading font-semibold mb-2">Experience (Years) *</label>
                                <input type="number" class="form-control-dark w-full" placeholder="Years of experience" min="0" required>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-stone-200 font-heading font-semibold mb-2">Email *</label>
                                <input type="email" class="form-control-dark w-full" placeholder="your.email@example.com" required>
                            </div>
                            <div>
                                <label class="block text-stone-200 font-heading font-semibold mb-2">Phone Number *</label>
                                <input type="tel" class="form-control-dark w-full" placeholder="+91 98765 43210" required>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-stone-200 font-heading font-semibold mb-2">Subject/Expertise *</label>
                            <select class="form-control-dark w-full" required>
                                <option value="">Select your area of expertise</option>
                                <option value="mathematics">Mathematics</option>
                                <option value="science">Science</option>
                                <option value="english">English</option>
                                <option value="computer_science">Computer Science</option>
                                <option value="business_studies">Business Studies</option>
                                <option value="life_skills">Life Skills & Mentoring</option>
                                <option value="career_guidance">Career Guidance</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-stone-200 font-heading font-semibold mb-2">Availability *</label>
                            <select class="form-control-dark w-full" required>
                                <option value="">Select your availability</option>
                                <option value="weekends">Weekends Only</option>
                                <option value="weekdays_evening">Weekday Evenings</option>
                                <option value="flexible">Flexible Schedule</option>
                                <option value="full_time">Full Time Commitment</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-stone-200 font-heading font-semibold mb-2">Teaching Philosophy *</label>
                            <textarea class="form-control-dark w-full h-32" placeholder="Share your teaching philosophy and approach to student mentoring..." required></textarea>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn-bharatpur-primary px-8 py-3">
                                <i class="fas fa-chalkboard-teacher mr-2"></i>
                                Submit Application
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Donor Application Form -->
        <div id="donor-form" class="application-form hidden">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-stone-100 mb-4">Donor/Sponsor Application</h2>
                    <p class="text-stone-300 text-lg font-body">Support our mission and make a lasting impact</p>
                </div>
                
                <div class="bg-stone-800/50 backdrop-blur-lg border border-amber-500/20 rounded-2xl p-8">
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-stone-200 font-heading font-semibold mb-2">Full Name/Organization *</label>
                                <input type="text" class="form-control-dark w-full" placeholder="Your name or organization name" required>
                            </div>
                            <div>
                                <label class="block text-stone-200 font-heading font-semibold mb-2">Donor Type *</label>
                                <select class="form-control-dark w-full" required>
                                    <option value="">Select donor type</option>
                                    <option value="individual">Individual</option>
                                    <option value="corporate">Corporate</option>
                                    <option value="foundation">Foundation/Trust</option>
                                    <option value="government">Government</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-stone-200 font-heading font-semibold mb-2">Email *</label>
                                <input type="email" class="form-control-dark w-full" placeholder="your.email@example.com" required>
                            </div>
                            <div>
                                <label class="block text-stone-200 font-heading font-semibold mb-2">Phone Number *</label>
                                <input type="tel" class="form-control-dark w-full" placeholder="+91 98765 43210" required>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-stone-200 font-heading font-semibold mb-2">Contribution Type *</label>
                            <select class="form-control-dark w-full" required>
                                <option value="">Select contribution type</option>
                                <option value="financial">Financial Donation</option>
                                <option value="scholarship">Student Scholarships</option>
                                <option value="infrastructure">Infrastructure Support</option>
                                <option value="equipment">Equipment & Resources</option>
                                <option value="ongoing_partnership">Ongoing Partnership</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-stone-200 font-heading font-semibold mb-2">Contribution Amount (Optional)</label>
                            <select class="form-control-dark w-full">
                                <option value="">Select amount range</option>
                                <option value="5000-25000">₹5,000 - ₹25,000</option>
                                <option value="25000-100000">₹25,000 - ₹1,00,000</option>
                                <option value="100000-500000">₹1,00,000 - ₹5,00,000</option>
                                <option value="500000+">₹5,00,000+</option>
                                <option value="custom">Custom Amount</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-stone-200 font-heading font-semibold mb-2">Message *</label>
                            <textarea class="form-control-dark w-full h-32" placeholder="Tell us about your vision for supporting our mission..." required></textarea>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn-bharatpur-primary px-8 py-3">
                                <i class="fas fa-heart mr-2"></i>
                                Submit Application
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-16 section-dark">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto">
            <h3 class="font-display text-2xl md:text-3xl font-bold text-stone-100 mb-6">Get In Touch</h3>
            <p class="text-stone-300 text-lg mb-8 font-body">
                Have questions about joining us? We're here to help guide you through the process.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="feature-card-dark text-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-envelope text-stone-800"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-stone-100 mb-2">Email Us</h4>
                    <p class="text-amber-400 font-body">info@bharatpurfoundation.org</p>
                </div>
                
                <div class="feature-card-dark text-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-phone text-stone-800"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-stone-100 mb-2">Call Us</h4>
                    <p class="text-amber-400 font-body">+91 98765 43210</p>
                </div>
                
                <div class="feature-card-dark text-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-yellow-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-map-marker-alt text-stone-800"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-stone-100 mb-2">Visit Us</h4>
                    <p class="text-amber-400 font-body">Mumbai, Maharashtra</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function showForm(type) {
    // Hide all forms
    document.querySelectorAll('.application-form').forEach(form => {
        form.classList.add('hidden');
    });
    
    // Show selected form
    const selectedForm = document.getElementById(type + '-form');
    if (selectedForm) {
        selectedForm.classList.remove('hidden');
        selectedForm.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}

// Show student form by default
document.addEventListener('DOMContentLoaded', function() {
    showForm('student');
});
</script>

<style>
.application-form {
    transition: all 0.5s ease;
}

.form-control-dark:focus {
    outline: none;
    border-color: #ffb800;
    box-shadow: 0 0 0 3px rgba(255, 184, 0, 0.2);
}
</style>

<?= $this->endSection() ?>
