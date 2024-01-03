<svg xmlns="http://www.w3.org/2000/svg" width="400" height="120">
    <rect xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="100%" height="100%" fill="#0d1117" stroke="#eaecef" stroke-width="2"></rect>
    <g xmlns="http://www.w3.org/2000/svg" fill="#4c535b" transform="translate(20, 12) scale(1.4000000000000001)">
        <path fill-rule="evenodd" d="M4,9 L3,9 L3,8 L4,8 L4,9 M4,6 L3,6 L3,7 L4,7 L4,6 M4,4 L3,4 L3,5 L4,5 L4,4 M4,2 L3,2 L3,3 L4,3 L4,2 M12,1 L12,13 C12,13.55 11.55,14 11,14 L6,14 L6,16 L4.5,14.5 L3,16 L3,14 L1,14 C0.45,14 0,13.55 0,13 L0,1 C0,0.45 0.45,0 1,0 L11,0 C11.55,0 12,0.45 12,1 M11,11 L1,11 L1,13 L3,13 L3,12 L6,12 L6,13 L11,13 L11,11 M11,1 L2,1 L2,10 L11,10 L11,1" />
    </g>
    <g xmlns="http://www.w3.org/2000/svg" fill="#0366d6" transform="translate(48, 27.6)">
        <a target="_blank" href="https://github.com/{{$data['user']}}/{{$data['repo']}}">
            <text font-family="sans-serif" font-size="16" font-weight="600" fill="#589acd">{{$data['user']}}/{{$data['repo']}}</text>
        </a>
    </g>
    <g xmlns="http://www.w3.org/2000/svg" transform="translate(300, 106)">
        <a target="_blank" href="https://github.com/{{$data['user']}}/{{$data['repo']}}/stargazers">
            <text x="0" y="0" font-family="sans-serif" font-size="12" fill="#4c535b">★</text>
            <text x="13" y="0" font-family="sans-serif" font-size="12" fill="#4c535b">{{$data['stars']}}</text>
        </a>
    </g>
    <g xmlns="http://www.w3.org/2000/svg" transform="translate(33, 101)">
        <circle cx="-10" cy="0" r="7" fill="{{$corlang}}" />
        <text x="0" y="4" font-family="sans-serif" font-size="12" fill="#4c535b">{{$data['lang']}}</text>
    </g>
    <g xmlns="http://www.w3.org/2000/svg" transform="translate(360, 90)">
        <a target="_blank" href="https://github.com/{{$data['user']}}/{{$data['repo']}}/network/members">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" viewBox="0 0 20 16" fill="none">
                <path d="M7 5C7 3.89543 7.89543 3 9 3C10.1046 3 11 3.89543 11 5C11 5.74028 10.5978 6.38663 10 6.73244V14.0396H11.7915C12.8961 14.0396 13.7915 13.1441 13.7915 12.0396V10.7838C13.1823 10.4411 12.7708 9.78837 12.7708 9.03955C12.7708 7.93498 13.6662 7.03955 14.7708 7.03955C15.8753 7.03955 16.7708 7.93498 16.7708 9.03955C16.7708 9.77123 16.3778 10.4111 15.7915 10.7598V12.0396C15.7915 14.2487 14.0006 16.0396 11.7915 16.0396H10V17.2676C10.5978 17.6134 11 18.2597 11 19C11 20.1046 10.1046 21 9 21C7.89543 21 7 20.1046 7 19C7 18.2597 7.4022 17.6134 8 17.2676V6.73244C7.4022 6.38663 7 5.74028 7 5Z" fill="#4c535b" />
            </svg>
            <text x="16" y="16" font-family="sans-serif" font-size="12" fill="#4c535b">{{$data['forks']}}</text>
        </a>
    </g>
    <text xmlns="http://www.w3.org/2000/svg" x="17" y="54" font-family="sans-serif" font-size="10" fill="#4c535b">{{$data['desc']}}</text>
</svg>