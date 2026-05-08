<x-mail::message>
# Nouveau message de contact

**Nom :** {{ $data['name'] }}

**Email :** {{ $data['email'] }}

**Message :**

{{ $data['message'] }}

<x-mail::button :url="'mailto:' . $data['email']">
Répondre
</x-mail::button>

— WebOasis Labs
</x-mail::message>
