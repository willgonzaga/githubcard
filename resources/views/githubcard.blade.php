<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 450 140" fill="none">
    <style>
        .win-title { font: 500 13px 'SF Mono', Monaco, Consolas, 'Fira Code', monospace; fill: #7ee787; }
        .repo-name { font: 700 16px 'SF Mono', Monaco, Consolas, 'Fira Code', monospace; fill: #e6edf3; }
        .description { font: 400 13px 'Segoe UI', Helvetica, Arial, sans-serif; fill: #8b949e; }
        .footer-text { font: 500 12px 'SF Mono', Monaco, Consolas, 'Fira Code', monospace; fill: #7d8590; }
        .card-bg { fill: #161b22; stroke: #30363d; stroke-width: 1.5px; rx: 8px; }
        .branch-text { fill: #f2cc60; }
    </style>

    <rect class="card-bg" x="0.5" y="0.5" width="449" height="139"></rect>

    <circle cx="20" cy="20" r="5" fill="#ff5f56" />
    <circle cx="36" cy="20" r="5" fill="#ffbd2e" />
    <circle cx="52" cy="20" r="5" fill="#27c93f" />

    <text x="75" y="24" class="win-title">~/{{ $data['repo'] }}</text>
    <line x1="0" y1="38" x2="450" y2="38" stroke="#30363d" stroke-width="1" />

    <a href="https://github.com/{{$data['user']}}/{{$data['repo']}}" target="_blank">
        <text x="20" y="65" class="repo-name">{{$data['user']}}/{{$data['repo']}}</text>
    </a>

    <text x="20" y="88" class="description">{{$data['desc']}}</text>

    <g transform="translate(20, 115)">
        <circle cx="5" cy="5" r="5" fill="{{$corlang}}" />
        <text x="16" y="9" class="footer-text">{{$data['lang']}}</text>
    </g>

    <a href="https://github.com/{{$data['user']}}/{{$data['repo']}}/stargazers" target="_blank">
        <g transform="translate(140, 115)">
            <svg viewBox="0 0 16 16" width="13" height="13" fill="#7d8590" y="-3">
                <path fill-rule="evenodd" d="M8 .25a.75.75 0 01.673.418l1.882 3.815 4.21.612a.75.75 0 01.416 1.279l-3.046 2.97.719 4.192a.75.75 0 01-1.088.791L8 12.347l-3.766 1.98a.75.75 0 01-1.088-.79l.72-4.194L.818 6.374a.75.75 0 01.416-1.28l4.21-.611L7.327.668A.75.75 0 018 .25z"></path>
            </svg>
            <text x="18" y="9" class="footer-text">{{$data['stars']}} <tspan class="branch-text">stars</tspan></text>
        </g>
    </a>

    <a href="https://github.com/{{$data['user']}}/{{$data['repo']}}/network/members" target="_blank">
        <g transform="translate(240, 115)">
            <svg viewBox="0 0 16 16" width="13" height="13" fill="#7d8590" y="-3">
                <path fill-rule="evenodd" d="M5 3.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm0 2.122a2.25 2.25 0 10-1.5 0v3.256a2.25 2.25 0 101.5 0V5.372zm3.167 1.341a.75.75 0 00-1.06-1.06l-1.25 1.25a.75.75 0 000 1.06l1.25 1.25a.75.75 0 101.06-1.06L7.31 8l.857-.857zM11 6.372a2.25 2.25 0 10-1.5 0v3.256a2.25 2.25 0 101.5 0V6.372zM11 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"></path>
            </svg>
            <text x="18" y="9" class="footer-text">{{$data['forks']}} <tspan class="branch-text">forks</tspan></text>
        </g>
    </a>
</svg>
