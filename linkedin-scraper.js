const puppeteer = require('puppeteer');

(async () => {
  const browser = await puppeteer.launch({ headless: true });
  const page = await browser.newPage();

  // Aller sur la page de login LinkedIn
  await page.goto('https://www.linkedin.com/login', { waitUntil: 'networkidle2' });

  // Remplace par tes identifiants LinkedIn
  await page.type('#username', 'VOTRE_EMAIL');
  await page.type('#password', 'VOTRE_MOT_DE_PASSE');
  await page.click('button[type="submit"]');
  await page.waitForNavigation({ waitUntil: 'networkidle2' });

  // Aller sur le profil cible
  await page.goto('https://www.linkedin.com/in/TON-URL/', { waitUntil: 'networkidle2' });

  // Récupérer les liens des posts
  const posts = await page.evaluate(() => {
    const anchors = [...document.querySelectorAll('a')];
    return anchors
      .map(a => a.href)
      .filter(href => href.includes('/feed/update/'));
  });

  console.log(posts);

  await browser.close();
})();