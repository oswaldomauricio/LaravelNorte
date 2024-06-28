<div id="loading-spinner">
    <div class="flex justify-center items-center h-screen">
        <img src="/imgs/spinner.gif" alt="spinner para carregamento de paginas" class="flex justify-center items-center w-20">
    </div>
</div>

<!-- Spinner CSS -->
<style>
    .loader {
        display: flex;
        justify-content: center;
        align-items: center;
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
    }

    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* Spinner Container */
    #loading-spinner {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }
</style>

<script src="/js/spinner.js"></script>