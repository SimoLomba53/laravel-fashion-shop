<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('homepage') }}">{{ env('APP_NAME') }}</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if(Request::route()->getName() == 'home') active @endif active" href="{{ route('homepage') }}" aria-current="page">Home <span
                            class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Request::route()->getName() == 'sneakers') active @endif active" href="{{ route('shoes.index') }}" aria-current="page">Sneakers<span
                            class="visually-hidden">(current)</span></a>
                </li>
                
            </ul>
            <div>
                <img style="width:60px;height:60px;" src="https://www.brooksrunning.com/on/demandware.static/-/Library-Sites-BrooksRunningShared/default/dw422a93ec/cms-content/Project/ADT/Brooks-Running/Legacy/Summer-2020/Your-best-shoe-AP/Normal-AP-images/Article_916_FindShoe_1_AH_S.png" alt="">
            </div>

           
        </div>
    </div>
</nav>