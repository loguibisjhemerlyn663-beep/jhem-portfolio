// resources/js/app.js
import './bootstrap';

// Development Console Prompt Log
const promptLog = {
    enabled: import.meta.env.DEV, // Only show in development
    styles: {
        title: 'color: #6366F1; font-size: 20px; font-weight: bold;',
        subtitle: 'color: #06B6D4; font-size: 14px; font-weight: bold;',
        info: 'color: #6B7280; font-size: 12px;',
        success: 'color: #10B981; font-size: 12px; font-weight: bold;',
        warning: 'color: #F59E0B; font-size: 12px; font-weight: bold;',
    },
    
    logPortfolioInfo() {
        if (!this.enabled) return;
        
        console.group('%c🚀 Choey Mauzar Portfolio', this.styles.title);
        
        console.log('%c👨‍💻 Developer Information', this.styles.subtitle);
        console.log('%cName: Choey Mauzar', this.styles.info);
        console.log('%cRole: Full-Stack Developer & PC Builder', this.styles.info);
        console.log('%cLocation: Bangued, Abra, Philippines', this.styles.info);
        
        console.log('%c🛠️ Tech Stack', this.styles.subtitle);
        console.log('%cFrontend: HTML5, CSS3, JavaScript, Tailwind CSS', this.styles.info);
        console.log('%cBackend: Laravel 12, PHP', this.styles.info);
        console.log('%cMobile: Flutter & Dart', this.styles.info);
        
        console.log('%c📊 Current Status', this.styles.subtitle);
        console.log('%c✓ Available for freelance opportunities', this.styles.success);
        console.log('%c✓ Open to junior developer roles', this.styles.success);
        console.log('%c✓ Incoming 4th Year BSIT Student', this.styles.success);
        
        console.log('%c💡 Want to connect?', this.styles.subtitle);
        console.log('%cEmail: choeymauzar@gmail.com', this.styles.info);
        console.log('%cPhone: 09615038773', this.styles.info);
        
        console.log('%c⚠️ This console is for developers only. If you see this, you might be a developer too!', this.styles.warning);
        
        console.groupEnd();
        
        // Easter egg
        console.log(
            '%c' + String.fromCharCode(10084) + ' Thanks for checking out my code!',
            'color: #EC4899; font-size: 16px; font-weight: bold; text-shadow: 0 0 10px #EC4899;'
        );
    },
    
    logPageLoad() {
        if (!this.enabled) return;
        
        const loadTime = performance.now();
        console.log(`%c⚡ Page loaded in ${loadTime.toFixed(2)}ms`, this.styles.info);
    }
};

// Initialize prompt log
document.addEventListener('DOMContentLoaded', () => {
    promptLog.logPortfolioInfo();
    promptLog.logPageLoad();
});

// Dark mode toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const themeToggles = [
        document.getElementById('theme-toggle'),
        document.getElementById('theme-toggle-mobile')
    ];

    function setTheme(theme) {
        if (theme === 'dark') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        }
    }

    function toggleTheme() {
        if (document.documentElement.classList.contains('dark')) {
            setTheme('light');
        } else {
            setTheme('dark');
        }
    }

    // Add click listeners to theme toggles
    themeToggles.forEach(toggle => {
        if (toggle) {
            toggle.addEventListener('click', toggleTheme);
        }
    });

    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu on link click
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    }
});

// Export for use in other files if needed
export default promptLog;