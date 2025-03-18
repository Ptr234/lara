<?php
header("X-Frame-Options: DENY"); // Prevent Clickjacking
header("X-Content-Type-Options: nosniff"); // Prevent MIME-type sniffing
header("X-XSS-Protection: 1; mode=block"); // XSS Protection
header("Referrer-Policy: no-referrer"); // Hide referrer details
header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload"); // Enforce HTTPS
header("Permissions-Policy: geolocation=(), microphone=(), camera=()"); // Restrict browser APIs
