@extends('layouts.portfolio')

@section('title', 'My Portfolio')

@section('content')
    <section id="about" class="hero-section">
        <div class="row">
            <div class="col-md-9 mx-auto text-center">
                @if($aboutMe)
                    <img src="https://ui-avatars.com/api/?name=Developer&background=4F46E5&color=fff&size=150" alt="Profile" class="profile-image">
                    <h1 class="mb-3">Nico Pranama Hadi</h1>
                    <p class="fs-5 mb-3">{{$aboutMe->education ?? 'Backend Developer'}} | {{ $aboutMe->major ?? 'Blockchain Developer' }} | {{ $aboutMe->university ?? 'Mobile Developer' }}</p>
                    <div class="mb-4">
                        {{ $aboutMe->description ?? 'Welcome to my portfolio' }}
                    </div>
                @else
                    <img src="https://ui-avatars.com/api/?name=Developer&background=4F46E5&color=fff&size=150" alt="Profile" class="profile-image">
                    <h1 class="mb-3">Developer</h1>
                    <p class="lead mb-3">Web Developer</p>
                    <div class="mb-4">
                        Welcome to my portfolio
                    </div>
                @endif  
            </div>

            <!-- Statistik -->
            <div class="col-md-10 mx-auto text-center">
                <div class="stats-container d-flex justify-content-center gap-5 flex-wrap">
                    <div class="stat-item">
                        <div class="stat-value">{{ $projects->count() }}+</div>
                        <div class="stat-label">Projects Completed</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">{{ $skills->count() }}+</div>
                        <div class="stat-label">Skills</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">{{ $contacts->count() }}+</div>
                        <div class="stat-label">Contact Methods</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section">
        <h2 class="section-title">Skills</h2>
        
        @if($skills->isNotEmpty())
            <!-- Kategori Skills -->
            <div class="skill-categories">
                <button class="skill-category active" data-category="all">All</button>
                @foreach($categories as $category)
                    <button class="skill-category" data-category="{{ $category }}">{{ $category }}</button>
                @endforeach
            </div>
            
            <div class="row">
                @foreach($skills as $skill)
                    <div class="col-md-6 skill-item" data-category="{{ $skill->category }}">
                        <div class="card mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="mb-0 text-white">{{ $skill->name }}</h5>
                                @if($skill->is_learning)
                                    <span class="badge bg-warning text-dark">Learning</span>
                                @endif
                            </div>
                            <div class="d-flex align-items-center mb-1">
                                <div class="flex-grow-1 me-2">
                                    <div class="skill-progress">
                                        <div class="skill-progress-bar" style="width: {{ $skill->proficiency_level }}%"></div>
                                    </div>
                                </div>
                                <span>{{ $skill->proficiency_level }}%</span>
                            </div>
                            <small class="text-secondary">{{ $skill->category }}</small>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-info">No skills added yet.</div>
        @endif
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section">
        <h2 class="section-title">Projects</h2>
        
        @if($projects->isNotEmpty())
            <div class="row">
                @foreach($projects as $project)
                    <div class="col-md-6 mb-4">
                        <div class="card project-card h-60">
                            <!-- Header dengan judul dan status -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="mb-0 text-white" style="font-weight: 600;">{{ $project->title }}</h4>
                                @if($project->status)
                                    <span class="badge bg-{{ $project->status === 'completed' ? 'success' : ($project->status === 'development' ? 'primary' : 'warning') }}">
                                        {{ ucfirst($project->status) }}
                                    </span>
                                @endif
                            </div>
                            
                            <!-- Deskripsi project -->
                            <p class="text-secondary mb-3">{{ $project->description }}</p>
                            
                            <!-- Tech stack -->
                            <div class="mb-3">
                                @foreach(explode(',', $project->tech_stack) as $tech)
                                    <span class="skill-tag">{{ trim($tech) }}</span>
                                @endforeach
                            </div>
                            
                            <!-- Tombol aksi -->
                            <div class="mt-auto">
                                <div class="d-flex flex-wrap">
                                    @if($project->github_link)
                                        <a href="{{ $project->github_link }}" class="btn btn-outline-light fw-semibold me-2 mb-2" target="_blank">
                                            <i class="fab fa-github me-1"></i> GitHub
                                        </a>
                                    @endif
                                    
                                    @if($project->demo_link)
                                        <a href="{{ $project->demo_link }}" class="btn btn-primary fw-semibold mb-2" target="_blank">
                                            <i class="fas fa-external-link-alt me-1"></i> Live Demo
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-info">No projects added yet.</div>
        @endif
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <h2 class="section-title">Contact</h2>
        
        @if($contacts->isNotEmpty())
            <div class="row">
                @foreach($contacts as $contact)
                    <div class="col-md-3 mb-4">
                        <a href="{{ $contact->link }}" class="text-decoration-none" target="_blank">
                            <div class="contact-item">
                                @php
                                    $iconClass = 'fa-globe'; // Default icon
                                    
                                    // Platform specific icons
                                    if (stripos($contact->platform, 'github') !== false) $iconClass = 'fab fa-github';
                                    elseif (stripos($contact->platform, 'linkedin') !== false) $iconClass = 'fab fa-linkedin';
                                    elseif (stripos($contact->platform, 'twitter') !== false) $iconClass = 'fab fa-twitter';
                                    elseif (stripos($contact->platform, 'email') !== false) $iconClass = 'fa-envelope';
                                    elseif (stripos($contact->platform, 'instagram') !== false) $iconClass = 'fab fa-instagram';
                                    elseif (stripos($contact->platform, 'x') !== false) $iconClass = 'fab fa-x-twitter';
                                    elseif (stripos($contact->platform, 'whatsapp') !== false) $iconClass = 'fab fa-whatsapp';
                                @endphp
                                
                                <i class="fas {{ $iconClass }}"></i>
                                <div>
                                    <strong>{{ $contact->platform }}</strong>
                                    <div>{{ $contact->username }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-info">No contact information added yet.</div>
        @endif
    </section>
@endsection