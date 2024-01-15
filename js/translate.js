document.addEventListener('DOMContentLoaded', function () {
    const languageSelect = document.getElementById('language-select');

    let translate; // Variable to store the translation function

    // Initialize i18next
    i18next
        .use(i18nextBrowserLanguageDetector)
        .init({
            resources: {
                en: {
                    translation: {
                        title: 'Your Title Here',
                        office: 'Office',
                        header: 'This is a Header',
                        mediumHeader: 'This is a Medium Header',
                        paragraph1: 'This is a new paragraph!',
                        paragraph2: 'This is a new paragraph!',
                        boldItalics: 'This is a new sentence without a paragraph break, in bold italics.',
                    }
                },
                fr: {
                    translation: {
                        title: 'Votre titre ici',
                        office: 'Bureau',
                        header: 'Ceci est un en-tête',
                        mediumHeader: 'Ceci est un en-tête moyen',
                        paragraph1: 'Ceci est un nouveau paragraphe !',
                        paragraph2: 'Ceci est un nouveau paragraphe !',
                        boldItalics: 'Ceci est une nouvelle phrase sans saut de paragraphe, en gras italique.',
                    }
                },
                ar: {
                    translation: {
                        title: 'حريعسيعبيديكيدمپنهدلوسن',
                       office: 'مكتب',
                        header: 'حريعسيعبيديكيدمپنهدلوسن',
                        mediumHeader: 'حريعسيعبيديكيدمپنهدلوسن',
                        paragraph1: 'حريعسيعبيديكيدمپنهدلوسن!',
                        paragraph2: 'حريعسيعبيديكيدمپنهدلوسن!',
                        boldItalics: 'حريعسيعبيديكيدمپنهدلوسن',
                    }
                }
            },
            fallbackLng: 'en',
            debug: true,
        }, function (err, t) {
            // Initialize the translations
            translate = t; // Store the translation function

            updateContent();

            // Change language on dropdown selection
            languageSelect.addEventListener('change', function () {
                const selectedLanguage = this.value;
                i18next.changeLanguage(selectedLanguage, function () {
                    // Update the content after changing the language
                    updateContent();
                });
            });
        });

    function updateContent() {
        document.querySelectorAll('[data-i18n]').forEach((element) => {
            const key = element.getAttribute('data-i18n');
            if (key === 'title') {
                document.title = translate(key);
            } else if (key === 'linkName') {
                element.textContent = translate(key);
                // If you have other attributes to update, do it here (e.g., href)
            } else {
                element.innerHTML = translate(key);
            }
        });
    }
});