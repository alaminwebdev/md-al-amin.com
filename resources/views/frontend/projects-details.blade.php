@extends('app')
@section('content')
    <style>
        .carousel-indicators [data-bs-target] {
            width: 19px;
            height: 5px;
            background-color: #00d4ff;
            background-clip: padding-box;
            border: 0;
            transition: opacity .6s ease;
            border-radius: 6px !important;
        }


        .carousel-item {
            height: 450px;
            -webkit-border-radius: 14px;
            -moz-border-radius: 14px;
            -ms-border-radius: 14px;
            -o-border-radius: 14px;
            /* background: #000; */
            background: linear-gradient(to right, var(--nft-violet-glow), var(--nft-blue-violet), var(--nft-blue-violet), var(--nft-violet-glow)) repeat;
        }

        .other-project {
            padding: 100px 25px 25px 25px;
        }

        .project-image,
        .other-project {
            -webkit-border-radius: 14px;
            -moz-border-radius: 14px;
            -ms-border-radius: 14px;
            -o-border-radius: 14px;
        }

        .other-project::before {
            position: absolute;
            content: '';
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            background: linear-gradient(to right, var(--nft-violet-glow), var(--nft-blue-violet), var(--nft-blue-violet), var(--nft-violet-glow)) repeat;
            border-radius: inherit;
            mask-image: linear-gradient(transparent, #fff);
            -webkit-mask-image: linear-gradient(transparent, #fff);
            -moz-mask-image: linear-gradient(transparent, #fff);
            -o-mask-image: linear-gradient(transparent, #fff);
        }

        .other-project::after {
            position: absolute;
            content: '';
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -2;
            background-color: rgba(0, 0, 0, 0.20);
            border-radius: inherit;
        }

        .project-description dl,
        ol,
        ul {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        .project-description ul li {
            margin-bottom: 1rem;
            line-height: 1.8;
            color: var(--nft-amazing-card-paragraph);
        }

        .project-info {
            padding: 15px !important;
        }
        .project-tags{
            margin-top: 12px;
        }

        .project-tags .badge {
            background: linear-gradient(to right, var(--nft-violet-glow), var(--nft-blue-violet), var(--nft-blue-violet), var(--nft-violet-glow)) repeat;
            color: var(--nft-white);
        }
        .project-link-wrapper{
            gap: 10px !important;
            margin-top: 12px;
        }
    </style>

    <section class="section-pt" id="project">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4 mb-sm-0">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach ($projectData->images as $index => $image)
                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="{{ $index }}" class="{{ $loop->first ? 'active' : '' }}"
                                    aria-label="Slide {{ $index + 1 }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach ($projectData->images as $image)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}  w-100">
                                    <a href="{{ asset($image->image_path) }}" data-baguettebox="project-images"
                                        data-caption="{{ $projectData->short_description }}">
                                        <img decoding="async" src="{{ asset($image->image_path) }}"
                                            class="d-block w-100 h-100 project-image" style="object-fit:cover"
                                            alt="{{ $projectData->short_description }}">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev" data-cursor-text="Previous" data-cursor="nft-click-me-cursor">
                                <i data-icon="iconLeftArrow" style="color: #00d4ff; font-size:16px;" ></i>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next" data-cursor-text="Next" data-cursor="nft-click-me-cursor">
                            <i data-icon="iconRightArrow" style="color: #00d4ff; font-size:16px;"></i>
                        </button>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="amazing-art-content-wrapper position-relative overflow-hidden project-info h-100">
                        <div class="mb-3">
                            <h3 class="p fw-semibold feature-name">Project Link</h3>
                            <ul class="d-grid social-icons-list-wrapper project-link-wrapper">
                                <li class="social-icon-list">
                                    <a href="{{ $projectData->live_url }}" target="_blank"
                                        class="social-icons-link flex-center">
                                        <i data-icon="websiteIcon" class="social-icons flex-center"></i>
                                    </a>
                                </li>
                                <li class="social-icon-list">
                                    <a href="{{ $projectData->host_link }}" target="_blank"
                                        class="social-icons-link flex-center">
                                        <i data-icon="githubIcon" class="social-icons flex-center"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="p fw-semibold feature-name">Title</h3>
                            <p class="p sm fw-normal mb-0 feature-info">{{ $projectData->short_description }}</p>
                        </div>
                        <div>
                            <h3 class="p fw-semibold feature-name">Tags</h3>
                            <div class="d-flex gap-2 flex-wrap project-tags">
                                @foreach ($projectData->tags as $tag)
                                    <span class="badge" style="line-height: 1.3;">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="amazing-diamond-img position-absolute bottom-0">
                            <img src="{{ asset('assets/images/nft/amazing-art-bg-diamond.png') }}" alt="diamond-img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-8">
                    <div class="project-description project-details">
                        <h5 class="small-title bg-text text-start mb-5">Project Overview</h5>
                        <div>{!! $projectData->long_description !!}</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project-details">
                        <h5 class="small-title bg-text text-start mb-5">Other Project</h5>
                        @foreach ($other_projects as $other_project)
                            @php
                                $firstImage = $other_project->images->first(); // Get the first image from the relation
                            @endphp
                            <a href="{{ route('project.details', ['slug' => $other_project->slug]) }}" target="_blank">
                                <div class="{{ $loop->last ? '' : 'mb-5' }} text-white other-project position-relative"
                                    style="background-image: url('{{ asset($firstImage->image_path) }}'); z-index:1; background-size:cover;">
                                    <h6 class="fst-italic fw-bold m-o ">{{ $other_project->project_name }}</h6>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
