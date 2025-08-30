# Laravel Team Portfolio Project - README

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![GitHub](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)

A professional team portfolio website built with Laravel featuring an interactive team member carousel, responsive design, and modern UI.

## 🌟 Features

- **Interactive Team Carousel**: Navigate through team members with smooth transitions
- **Responsive Design**: Works perfectly on desktop, tablet, and mobile devices
- **Modern UI**: Clean, professional design with elegant animations
- **Portfolio Links**: Direct links to team members' portfolios
- **Contact Section**: Team contact information in footer
- **Laravel Integration**: Built with Laravel's blade templating system

## 🚀 Quick Start

### Prerequisites

- PHP >= 7.4
- Composer
- Laravel >= 8.0
- Node.js and NPM

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/your-repo-name.git
   cd your-repo-name
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install NPM dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Start the development server**
   ```bash
   php artisan serve
   ```
   Visit http://localhost:8000 to view the application.

## 📁 Project Structure

```
resources/
  views/
    components/
      layout.blade.php      # Main layout template
    welcome.blade.php       # Homepage with team carousel
routes/
  web.php                   # Application routes
public/
  css/                      # Additional CSS files
  js/                       # JavaScript files
  images/                   # Team member images
```

## 🎨 Customization

### Adding Team Members

Edit the `$teamMembers` array in `routes/web.php`:

```php
$teamMembers = [
    [
        'name' => 'John Doe',
        'role' => 'Frontend Developer',
        'bio' => 'John specializes in creating responsive web applications.',
        'image' => '/images/team/john.jpg', // Add images to public/images/team/
        'portfolio_url' => 'https://johndoeportfolio.com'
    ],
    // Add more team members here
];
```

### Styling Customization

Modify the CSS in `resources/views/components/layout.blade.php` to match your brand:

- Change color scheme by updating CSS custom properties
- Modify fonts in the `font-family` declarations
- Adjust spacing and sizing as needed

### Adding Pages

1. Create new blade templates in `resources/views/`
2. Define routes in `routes/web.php`
3. Extend the main layout using `@extends('components.layout')`

## 🛠️ Build for Production

1. **Optimize the application**
   ```bash
   php artisan optimize
   ```

2. **Compile assets**
   ```bash
   npm run prod
   ```

3. **Set environment to production**
   ```bash
   # In your .env file
   APP_ENV=production
   APP_DEBUG=false
   ```

## 📱 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## 🤝 Contributing

1. Fork the project
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

## 🏆 Acknowledgments

- Laravel community
- Unsplash for placeholder images
- Team members for their contributions

## 📞 Support

If you have any questions or issues, please contact us at:
- Email: team@example.com
- GitHub Issues: [Create a new issue](https://github.com/your-username/your-repo-name/issues)

---

**Note**: Remember to replace placeholder content (team member information, URLs, contact details) with your actual information before deploying.
