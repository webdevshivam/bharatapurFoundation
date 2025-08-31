
// Translation helpers for client-side dynamic content
class TranslationHelper {
    constructor(language = 'en') {
        this.language = language;
        this.cache = new Map();
    }

    async translateText(text, targetLang = 'hi', sourceLang = 'en') {
        if (!text || sourceLang === targetLang) {
            return text;
        }

        const cacheKey = `${text}-${sourceLang}-${targetLang}`;
        if (this.cache.has(cacheKey)) {
            return this.cache.get(cacheKey);
        }

        try {
            // Use Google Translate API (free endpoint)
            const url = `https://translate.googleapis.com/translate_a/single?client=gtx&sl=${sourceLang}&tl=${targetLang}&dt=t&q=${encodeURIComponent(text)}`;
            
            const response = await fetch(url);
            const data = await response.json();
            
            if (data && data[0] && data[0][0] && data[0][0][0]) {
                const translated = data[0][0][0];
                this.cache.set(cacheKey, translated);
                return translated;
            }
        } catch (error) {
            console.error('Translation error:', error);
        }

        return text;
    }

    async translateElement(element, targetLang = 'hi') {
        if (element.textContent && element.textContent.trim()) {
            const translated = await this.translateText(element.textContent.trim(), targetLang);
            element.textContent = translated;
        }
    }

    async translatePage(targetLang = 'hi') {
        // Translate dynamic content that wasn't translated server-side
        const elements = document.querySelectorAll('[data-translate]');
        
        for (const element of elements) {
            await this.translateElement(element, targetLang);
        }
    }
}

// Initialize translator
window.translator = new TranslationHelper();

// Auto-translate on language switch
document.addEventListener('DOMContentLoaded', function() {
    const currentLang = document.documentElement.lang || 'en';
    
    if (currentLang === 'hi') {
        // Delay translation to allow page to fully load
        setTimeout(() => {
            window.translator.translatePage('hi');
        }, 1000);
    }
});
