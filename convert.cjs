const fs = require('fs');
const htmlToDocx = require('html-to-docx');

(async () => {
    try {
        const htmlString = fs.readFileSync('SRS_Bethania_Convent_School.html', 'utf-8');
        
        // Pass minimal options. html-to-docx tries to retain some styles and headings.
        const fileBuffer = await htmlToDocx(htmlString, null, {
            table: { row: { cantSplit: true } },
            footer: true,
            pageNumber: true,
            margins: { top: 1440, right: 1440, bottom: 1440, left: 1440 } // 1 inch
        });

        fs.writeFileSync('SRS_Bethania_Convent_School.docx', fileBuffer);
        console.log('Successfully created SRS_Bethania_Convent_School.docx');
    } catch (err) {
        console.error('Error generating docx:', err);
    }
})();
