@extends('components.layout')

@section('title', 'Our Team')

@section('content')
    <section class="team-section">
        <h2 class="section-title">Meet Our Team</h2>
        
        <div class="carousel-container">
            <div class="carousel">
                @if($teamMembers && count($teamMembers) > 0)
                    @foreach($teamMembers as $member)
                        <div class="member-card">
                            <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" class="member-image">
                            <h3 class="member-name">{{ $member['name'] }}</h3>
                            <p class="member-role">{{ $member['role'] }}</p>
                            <p class="member-bio">{{ $member['bio'] }}</p>
                            <a href="{{ $member['portfolio_url'] }}" class="portfolio-btn" target="_blank">View Portfolio</a>
                        </div>
                    @endforeach
                @else
                    <div class="member-card">
                        <img src="https://via.placeholder.com/180" alt="Placeholder" class="member-image">
                        <h3 class="member-name">No Team Members</h3>
                        <p class="member-role">Please add team members</p>
                        <p class="member-bio">There are currently no team members to display.</p>
                        <a href="#" class="portfolio-btn">Placeholder</a>
                    </div>
                @endif
            </div>
            
            <button class="carousel-btn prev">❮</button>
            <button class="carousel-btn next">❯</button>
            
            <div class="carousel-indicators">
                @if($teamMembers && count($teamMembers) > 0)
                    @for($i = 0; $i < count($teamMembers); $i++)
                        <div class="indicator {{ $i === 0 ? 'active' : '' }}"></div>
                    @endfor
                @else
                    <div class="indicator active"></div>
                @endif
            </div>
        </div>
    </section>
    
    <section id="about" class="about-section">
        <h2 class="section-title">About Our Team</h2>
        <div class="about-content">
            <p>We are a dedicated group of professionals who are passionate about delivering exceptional results. Our diverse skills and collaborative approach allow us to tackle complex challenges and create innovative solutions.</p>
            <p>With years of experience in our respective fields, we bring a wealth of knowledge and expertise to every project. We believe in continuous learning, creativity, and putting our clients' needs first.</p>
            <p>Get to know each team member by browsing through our carousel and visiting their individual portfolios to see examples of their work and accomplishments.</p>
        </div>
    </section>
@endsection