<?php

namespace App\Http\Livewire\Pages;

use App\Factories\AlbumFactory;
use App\Http\Livewire\Traits\AlbumProperty;
use App\Models\Album;
use App\Models\Configs;
use App\Models\Extensions\BaseAlbum;
use App\Models\Photo;
use App\SmartAlbums\BaseSmartAlbum;
use Illuminate\Support\Facades\Config;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Redirector;

class Fullpage extends Component
{
	use AlbumProperty;

	public PageMode $mode;
	public string $title;
	public ?Photo $photo = null;
	public ?BaseAlbum $baseAlbum = null;
	public ?BaseSmartAlbum $smartAlbum = null;

	protected $listeners = ['openAlbum', 'openPhoto', 'back', 'reloadPage'];

	public function mount(?string $albumId = null, ?string $photoId = null): void
	{
		$albumFactory = resolve(AlbumFactory::class);
		if ($albumId == null) {
			$this->mode = PageMode::ALBUMS();
			$this->title = Configs::get_value('site_title', Config::get('defines.defaults.SITE_TITLE'));
		} else {
			$this->mode = PageMode::ALBUM();
			$album = $albumFactory->findAbstractAlbumOrFail($albumId);
			$this->loadAlbum($album);
			$this->title = $album->title;

			if ($photoId != null) {
				$this->mode = PageMode::PHOTO();
				$this->photo = Photo::with('album')->findOrFail($photoId);
				$this->title = $this->photo->title;
			}
		}
	}

	public function render(): View
	{
		return view('livewire.pages.fullpage');
	}

	/*
	 *          Interactions
	 */
	public function reloadPage(): Redirector
	{
		if ($this->photo != null) {
			return redirect('/livewire/' . $this->getAlbumProperty()->id . '/' . $this->photo->id);
		}

		return redirect('/livewire/' . $this->getAlbumProperty()?->id ?? '');
	}

	public function openAlbum($albumId): Redirector
	{
		return redirect('/livewire/' . $albumId);
	}

	public function openPhoto($photoId): Redirector
	{
		return redirect('/livewire/' . $this->getAlbumProperty()->id . '/' . $photoId);
	}

	// Ideal we would like to avoid the redirect as they are slow.
	public function back(): Redirector
	{
		if ($this->photo != null) {
			// $this->photo = null;
			return redirect('/livewire/' . $this->getAlbumProperty()->id ?? '');
		}
		if ($this->baseAlbum != null) {
			if ($this->baseAlbum instanceof Album && $this->baseAlbum->parent_id != null) {
				return redirect('/livewire/' . $this->baseAlbum->parent_id);
			}

			return redirect('/livewire/');
		}
		if ($this->smartAlbum != null) {
			return redirect('/livewire/');
		}
	}
}
